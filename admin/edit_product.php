<?PHP include('includes/header.php'); ?>
<style>
.results {

    color: #009966;
}

.results1 {
    color: #FF0000;
}
</style>

<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <?php
        include('inc/myconnect.php');
        include('inc/function.php');
        include('inc/images_helper.php');
            //
        if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT, array('min_range' => 1))) {
            $id = $_GET['id'];
        } else {
            header("Location: list_product.php");
            exit();
        }

            //bat dau submit
        if (isset($_POST['submit'])) {
            $errors = array();
            // loại product
            if (empty($_POST['id_loai'])) {
                $errors[] = 'saleprice_product';
            } else {
                $id_loai = ($_POST['id_loai']);
            }
            // hiệu product
            if (empty($_POST['label_product'])) {
                $errors[] = 'label_product';
            } else {
                $label = ($_POST['label_product']);
            }
                // tên sản phẩm
            if (empty($_POST['name_product'])) {
                $errors[] = 'name_product';
            } else {
                $name = $_POST['name_product'];
            }
                // giá sản phẩm
            if (empty($_POST['price_product'])) {
                $errors[] = 'price_product';
            } else {
                $price = $_POST['price_product'];
            }
                // giá bán sản phẩm
            if (empty($_POST['saleprice_product'])) {
                $errors[] = 'saleprice_product';
            } else {
                $saleprice = $_POST['saleprice_product'];
            }
                // mô tả sản phẩm
            if (empty($_POST['describe_product'])) {
                $errors[] = 'describe_product';
            } else {
                $describe = $_POST['describe_product'];
            }
            $status = $_POST['status'];
            if (empty($errors)) {

                 // Duyệt mảng
                $link_image = "";
                $link_image_thump = "";
                echo "<pre>";
                print_r($_FILES['img']);
                echo "</pre>";
                foreach ($_FILES['img']['name'] as $key => $value) {

                    if (($_FILES['img']['type'][$key] != "image/png") &&
                        ($_FILES['img']['type'][$key] != "image/gif") &&
                        ($_FILES['img']['type'][$key] != "image/jpg") &&
                        ($_FILES['img']['type'][$key] != "image/jpeg")
                    ) {
                        $massge = "<p class='results1'>File không đúng định dạng !!</p>";
                } elseif (($_FILES['img']['size'][$key] > 1000000)) {
                    $massge = "<p class='results1'>Kích thước phải nhỏ hơn 1MB !!</p>";
                } else {
                    $img = $_FILES['img']['name'][$key];
                    $link_img = 'upload/' . $img;
                    move_uploaded_file($_FILES['img']['tmp_name'][$key], "../upload/" . $img);
                            //xử lí resize, crop hinh anh
                    $temp = explode('.', $img);
                    if ($temp[1] == 'jpeg' or $temp[1] == 'JPEG') {
                        $temp[1] = "jpg";
                    }
                    $temp[1] = strtolower($temp[1]);
                            $thump = 'upload/resize/' . $temp[0] . '_thump' . '.' . $temp[1]; // đường dẫn
                            $imageThump = new Image("../".$link_img);
                            if ($imageThump->getWidth() > 460) {
                                $imageThump->resize(460, 613,"resize");
                            }
                            $imageThump->save($temp[0] . '_thump', '../upload/resize'); //ten voi duong dan luu anh
                            $link_image .= $link_img . " ";
                            $link_image_thump .= $thump . " ";
                        }
                    }//ket thuc foreach
                    echo $link_image . "                     " . $link_image_thump . "a";

                    $query_in = "UPDATE tb_product SET 
                    name_product = '$name',
                    image = '$link_image',
                    image_thump = '$link_image_thump',
                    price_product = '$price',
                    saleprice_product = '$saleprice',
                    describe_product = '$describe',
                    status_product = '$status',
                    id_category = $id_loai,
                    label = $label
                    where id_product='$id'";
                    echo $query_in;
                    $result_in = mysqli_query($dbc, $query_in);
                    kt_query($query_in, $result_in);
                    echo "<pre>";
                    print_r($result_in);
                    echo "</pre>";
                    if ($result_in == 1) {
                        echo "<p class='results'>Chỉnh sửa thành công</p>";
                        $_POST['code_product'] = "";
                        $_POST['name_product'] = "";
                        $_POST['price_product'] = "";
                        $_POST['saleprice_product'] = "";
                        $_POST['describe_product'] = "";
                    } else {
                        echo "<p class='results1'>Chỉnh sửa không thành công</p>";
                    }
                } else {
                    $message = "<p class='results1'> Bạn hãy nhập đầy đủ thông tin </p>";
                }
            }
            //ket thuc submit
            $query = "SELECT * FROM tb_product  WHERE id_product={$id}";
            $result = mysqli_query($dbc, $query);
            $dong = mysqli_fetch_array($result, MYSQLI_ASSOC);
            kt_query($query, $result);
            //kiem tra id có tồn tại không
            if (mysqli_num_rows($result)) {

            } else {
                $message = "<p class='results1'>Sản phẩm không tồn tại</p>";
            }
            ?>
            <form name="frmedit-product" method="post" enctype="multipart/form-data" class="frmedit-product">
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>

                <h3 style="color: red;">Chỉnh sửa - sản phẩm "<?php echo $dong['name_product']; ?>"</h3>
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="name_product" value="<?php if (isset($_POST['name_product'])) {
                        echo $_POST['name_product'];
                    }
                    echo $dong['name_product']; ?>"
                    class="form-control" placeholder='Nhập tên sản phẩm'/>
                    <?php
                    if (isset($errors) && in_array('code_product', $errors)) {
                        echo "<p class='results1'> Bạn hãy nhập tên sản phẩm</p>";
                    }
                    ?>
                </div>
                <div class="form-group wrap-category" id="<?php echo $dong['id_category']; ?>">
                    <label>Thuộc loại : </label>
                    <?php ctrSelect('id_loai', 'class'); ?>
                    <?php
                    if (isset($errors) && in_array('id_loai', $errors)) {
                        echo "<p class='results1' >Bạn hãy nhập mã sản phẩm</p>";
                    }
                    ?>

                </div>
                <div class="form-group">
                    <label>Hiệu Sản phẩm</label>
                    <select name="label_product" style='padding:5px 10px;border-radius:4px;display: block;'>
                        <option value="" style="color: #999">- - - Chưa có hiệu - - -</option>
                        <?php
                        $query_label = "SELECT* FROM tb_label";
                        $result_label = mysqli_query($dbc, $query_label);
                        kt_query($query_label, $result_label);
                        while ($label = mysqli_fetch_array($result_label, MYSQLI_ASSOC)) {
                            ?>
                            <option style="text-transform: capitalize;"
                            value="<?php echo $label['id_label']; ?>" <?php if($label['id_label'] == $dong['id_label']) { echo "selected='selected'";} ?> ><?php echo $label['name_label']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>


                <div class="form-group">
                    <label>Ảnh sản phẩm</label>
                    <div class="wrap-img">
                        <?php  
                        $array_img = explode(" ", $dong['image']);
                        $array_img_thumb =  explode(" ", $dong['image_thump']);
                        for($i = 0; $i < count($array_img)-1; $i++ ) {
                            ?>
                            <span class="item">
                                <span class="delete"><i class="glyphicon glyphicon-remove"></i></span>
                                <div class="icon"><i class="glyphicon glyphicon-camera"></i></div>
                                <img src="../<?php echo $array_img[$i]; ?>" class="item-img">
                                <input type="hidden" name="anh_hi[]" value="<?php echo $array_img[$i]; ?>">
                                <input type="hidden" name="anhthumb_hi[]" value="<?php echo $array_img_thumb[$i]; ?>" >
                                <input type="file" name="img[]" class="file" ">
                            </span>
                            <?php 
                        }
                        ?>
                        <div class="more"><i class="glyphicon glyphicon-plus"></i></div>
                    </div>

                    <div class="clearfix"></div>
                </div>
                

                <div class="form-group">
                    <label>Giá sản phẩm</label>
                    <input type="text" name="price_product" value="<?php if (isset($_POST['price_product'])) {
                        echo $_POST['price_product'];
                    }
                    echo number_format($dong['price_product']); ?>" class="form-control"
                    placeholder='Nhập giá sản phẩm'/>
                    <?php
                    if (isset($errors) && in_array('price_product', $errors)) {
                        echo "<p class='results1' >Bạn hãy nhập giá sản phẩm</p>";
                    }
                    ?>
                </div>

                <div class="form-group">
                    <label>Giá bán sản phẩm</label>
                    <input type="text" name="saleprice_product" value="<?php if (isset($_POST['saleprice_product'])) {
                        echo $_POST['saleprice_product'];
                    }
                    echo number_format($dong['saleprice_product']); ?>" class="form-control"
                    placeholder='Nhập giá bán sản phẩm'/>
                    <?php
                    if (isset($errors) && in_array('saleprice_product', $errors)) {
                        echo "<p class='results1' >Bạn hãy nhập giá bán sản phẩm</p>";
                    }
                    ?>
                </div>


                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea rows="7"  name="describe_product" value="" class="form-control"><?php if (isset($_POST['describe_product'])) {
                        echo $_POST['describe_product'];
                    }
                    echo $dong['describe_product']; ?></textarea>
                    <?php
                    if (isset($errors) && in_array('describe_product', $errors)) {
                        echo "<p class='results1' >Bạn hãy nhập mô tả sản phẩm</p>";
                    }
                    ?>
                </div>

                <div class="form-group">
                    <label style="display:block">Trạng thái</label>

                    <label class="radio-inline"> <input type="radio" name="status" value="1" checked="checked"/>
                        <p class="results"> Còn hàng</p>
                    </label>
                    <label class="radio-inline"> <input type="radio" name="status" value="0"/>
                        <p class="results1"> Hết hàng</p></label>
                    </div>



                    <input type="submit" name="submit" class="btn btn-primary" value="Chỉnh sửa"/>

                </form>
            </div>
        </div>

        <?PHP include('includes/footer.php'); ?>
        <script type="text/javascript">

            window.onload = function()
            {
                $(".class option").each(function(){

                    if($(this).attr("value") ==  $(".wrap-category").attr("id")) { $(this).attr("selected", "selected")};
                });
                var i = 0;
                $(".more").click(function(e){
                    $(this).before(`<span class="item">
                        <div class="icon"><i class="glyphicon glyphicon-camera"></i></div>
                        <input type="file" name="file[]" class="file">
                        </span>`);
                    $('.item').fadeIn("slow");
                });
                $("body").on("change", ".file", function(){
                    i++;
                    $(this).parent().find("img").remove();
                    $(this).before('<span class="delete"><i class="glyphicon glyphicon-remove"></i></span>');
                    $(this).before("<img src='' class='img" + i + " item-img" +"'/>");
                    var ready = new FileReader();
                    ready.onload  = function(e){
                        $('.img' + i).attr('src', e.srcElement.result);
                    };

                    ready.readAsDataURL(this.files[0]);
                });
                $("body").on("click", ".delete", function(){
                 $(this).parent().remove();
             })
            };
        </script>