<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 9/15/2017
 * Time: 4:40 PM
 */
?>
<?PHP 
    include('includes/header.php');
    include('inc/function.php');
?>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped"> 
                <thead> 
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Họ và tên</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Ngày đặt hàng</th>
                        <th>Xem chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT code_order ,name_customer, phone_customer,address_customer,order_day FROM tb_order GROUP BY code_order";
                        $result = mysqli_query($dbc,$query);
                        kt_query($query, $result);
                        while ($order = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>                    
                    <tr>
                        <td><?php echo $order['code_order']; ?></td>
                        <td><?php echo $order['name_customer']; ?></td>
                        <td><?php echo $order['phone_customer']; ?></td>
                        <td><?php echo $order['address_customer']; ?></td>
                        <td><?php echo $order[' order_day']; ?></td>
                        <td>Xem chi tiết</td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
    </div>  



<?PHP 
    include('includes/footer.php');
?>

<script language="JavaScript">
    function chkallClick(o) {
        var form = document.frmForm;
        for (var i = 0; i < form.elements.length; i++) {
            if (form.elements[i].type == "checkbox" && form.elements[i].name!="chkall") {
                form.elements[i].checked = document.frmForm.chkall.checked;
            }
        }
    }
</script>
