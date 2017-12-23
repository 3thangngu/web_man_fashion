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
            <h2 style=" color: red">Danh Sách Đơn Hàng
               
             </h2>
            <table class="table table-striped"> 
                <thead> 
                    <tr>
                        <th>Mã hóa đơn</th>
                        <th>Mã đơn hàng</th>
                        <th>Họ và tên</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Ngày đặt hàng</th>
                        <th>Xem chi tiết</th>
                       <!--  <th>Duyệt</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT code_order, name_customer, phone_customer,address_customer,order_day,code_bill FROM tb_order,tb_bill WHERE tb_order.id_order = tb_bill.id_order &&  status_bill = '1'  GROUP BY code_order";
                        $result = mysqli_query($dbc,$query);
                        kt_query($query, $result);
                        while ($order = mysqli_fetch_array($result, MYSQLI_NUM)) {
                        ?>                    
                    <tr>
                         <td><?php echo $order[5]; ?></td>
                        <td><?php echo $order[0]; ?></td>
                        <td><?php echo $order[1]; ?></td>
                        <td><?php echo $order[2]; ?></td>
                        <td><?php echo $order[3]; ?></td>
                        <td><?php $date=date_create($order[4]);
                            echo date_format($date,"H:i - d/m/Y"); ?></td>
                        <td class="text-center"><a href="bill_detail.php?code_bill=<?php echo $order[5]; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                        <!-- <td class="text-center"><a onClick="return confirm('Bạn muốn chuyển đơn hàng này qua bên giao hàng ?');" href="functions/review_bill.php?id_order=<?php echo $order[0]; ?>"><i class="glyphicon glyphicon-ok"></i></a></td> -->
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