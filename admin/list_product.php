<?PHP include('includes/header.php'); ?>
<?php include('inc/myconnect.php'); ?>
<?php include('inc/function.php'); ?>

<div class="list-product">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 style="color: red">Sản phẩm
                <a href="add_product.php" style="float: right; color:#1b926c; font-size: 20px;">Thêm<i
                    class="fa fa-fw fa-plus-square-o"
                    style="font-size: 25px; color:#1b926c; float: right; padding-left: 10px; padding-right: 75px;"></i></a>
                </h2>
                <form class="form-search" method="GET" action="">
                    <input type="text" name="text_search" class="form-control text_search" placeholder="Search">
                    <input type="submit" name="btn-search" class="btn btn-primary btn-search" value="Tìm kiếm">
                </form>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Mã SP</th>
                            <th>Tên SP</th>
                            <th>Size</th>
                            <th>Loại SP</th>
                            <th>Hiệu SP</th>
                            <th>Hình ảnh</th>
                            <th>Giá</th>
                            <th>Giá bán</th>
                            <th>Mô tả</th>
                            <th>Lượt xem</th>
                            <th>Ngày thêm</th>
                            <th>Trạng thái</th>

                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <body>
                        <?php 
                        if (isset($_GET['btn-search']) && isset($_GET['text_search'])) {
                            $text_search = $_GET['text_search'];
                            product_search($text_search);
                        } else {
                            list_product();
                        }
                        ?>
                    </body>
                </table>

            </div>
        </div>
    </div>

    <?PHP include('includes/footer.php'); ?>