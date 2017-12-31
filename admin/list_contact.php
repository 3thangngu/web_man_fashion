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
        <h2 style="text-transform: uppercase;text-align: center;color: #bd0103;text-decoration: underline;">
            Danh sách liên hệ
        </h2>
        <table class="table table-striped"> 
            <thead> 
                <tr>
                    <th style="color: #bd0103;">STT</th>
                    <th style="color: #bd0103;">Họ và tên</th>
                    <th style="color: #bd0103;">Số điện thoại</th>
                    <th style="color: #bd0103;">Email</th>
                    <th style="color: #bd0103;">Địa chỉ</th>
                    <!-- <th style="color: #bd0103;">Nội dung</th> -->
                    <th style="color: #bd0103;">Trạng thái</th>
                    <th style="color: #bd0103;">Xem</th>              
                    <th style="color: #bd0103;">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = "SELECT * FROM tb_contact ORDER BY status";
                $result = mysqli_query($dbc,$query);
                kt_query($query, $result);
                $stt = 0;
                while ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $stt++;
                    ?>                    
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $rows['name']; ?></td>
                        <td><?php echo $rows['number_phone']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['address']; ?></td>
                        <!--                       <td><?php echo $rows['content']; ?></td> -->
                        <td style="font-weight: 700;"><?php echo $rows['status'] == 1 ? 'Đã xem' : 'Chưa xem' ?></td>
                        <td><a href="contact_detail.php?id=<?php echo $rows['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                        
                        <td class=""><a href="delete_contact.php?id=<?php echo $rows['id']; ?>"><i class="fa fa-fw fa-trash"></i></a></td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>  
</div>


<?PHP 
include('includes/footer.php');
?>

<script language="JavaScript">

</script>