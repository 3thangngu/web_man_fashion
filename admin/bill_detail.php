
<?PHP 
include('includes/header.php');
include('inc/function.php');
?>
<?php 
$code_bill = $_GET['code_bill'];
$query = "SELECT name_customer,phone_customer,address_customer FROM tb_bill a,tb_order b WHERE a.id_order = b.id_order && a.code_bill = '{$code_bill}' GROUP BY a.code_bill";

$result = mysqli_query($dbc, $query);
extract(mysqli_fetch_assoc($result));

?>
<?php 
$query_ifm ="SELECT name, value FROM tb_information";
$result_ifm = mysqli_query($dbc, $query_ifm);
$array_ifm = array();
while ( $rows = mysqli_fetch_array( $result_ifm, MYSQLI_NUM ))  {
  $array_ifm[$rows[0]] = $rows[1];
}
extract($array_ifm);
?>
<div class="row wrap-print" style="position: relative;">
  <style type="text/css" media="print">
     <?php include('includes/style-detail_bill.php'); ?>   
</style>
  <div class="wrap-bill">
  

    <div class="col-xs-12">
      <div class="row header">
        <div class="col-xs-6 logo">
          <img src="../<?php
          if (isset($logo_header)) {
           echo $logo_header;
         }
         ?>" width="243px" height="70px">
       </div>
       <div class="col-xs-6 ifm-shop text-right">

        <div class="adress">Địa chỉ: <?php
        if (isset($adress)) {
         $array_adress =  explode("$%^$%^", $adress);
         echo $array_adress[1];
       }
       ?></div>
       <div class="phone">Mobile: <?php
       if (isset($phone)) {
         $array_adress =  explode(" ", $phone);
         for ($i=1; $i < count($array_adress); $i++) { 

           if($i == 2){
            echo ' - ' . $array_adress[$i];
            break;
          } else {
            echo $array_adress[$i];
          }
        }
      }
      ?></div>
      <div class="email">Email: <?php
      if (isset($email)) {
       $array_email =  explode(" ", $email);
       for ($i=1; $i < count($array_adress); $i++) { 

         if($i == 2){
          echo ' - ' . $array_email[$i];
          break;
        } else {
          echo $array_email[$i];
        }
      }
    }
    ?></div>
  </div>
</div>
<div class="fm-custommer">
  <div class="title text-center">HÓA ĐƠN BÁN HÀNG <span class="code_bil">Mã hóa đơn: <?php echo $code_bill; ?></span></div>
  <div class="name col-xs-12">
    <span class="wrap-title">Tên khách hàng:</span><span class="value"><?php echo $name_customer; ?></span>
    <hr style="margin-left: 130px;">
  </div>
  <div class="adress-custommmer col-xs-7"> 
    <span class="wrap-title">Địa chỉ :</span><span class="value"><?php echo $address_customer; ?></span>
    <hr style="margin-left: 67px;">
  </div>
  <div class="phone-custommer col-xs-5">
   <span class="wrap-title">Điện thoại:</span><span class="value"><?php echo $phone_customer; ?></span>
   <hr style="margin-left: 90px;">
 </div>
</div>
<table class="table table-bordered ifm-product"> 
 <thead> 
  <tr> 
    <th>STT</th>
    <th>Mã hàng</th>
    <th>Tên hàng</th>
    <th>Size</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th> 
  </tr>
</thead>
<tbody>
  <?php 
  $stt = 0;
  $query_product = "SELECT  code_product, name_product, saleprice_product, b.quantity_product, b.size_product FROM tb_bill a,tb_order b, tb_product c WHERE a.id_order = b.id_order && b.id_product = c.id_product && a.code_bill = '{$code_bill}'";
  $result_product = mysqli_query($dbc, $query_product);
  while ($rows = mysqli_fetch_assoc($result_product) ) {
    $stt++;
    ?>
    <tr> 
      <th scope="row"><?php echo $stt; ?></th>
      <td><?php echo $rows['code_product']; ?></td>
      <td><?php echo $rows['name_product']; ?></td>
      <td><?php echo $rows['size_product']; ?></td>
      <td><?php echo $rows['quantity_product']; ?></td>
      <td><?php echo number_format($rows['saleprice_product'], 0, ',', '.'); ?></td>
      <td><?php echo number_format($rows['quantity_product']*$rows['saleprice_product'], 0, ',', '.') . ' VND'; ?></td>
    </tr>
    <?php
  }
  for($i = $stt; $i <= 7; $i++) {
    ?>


    <tr> 
      <th scope="row">&nbsp;</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <tr>
        <?php
      }
      ?>
      <tr>
        <td colspan="7">
          Tổng Cộng: <?php 
            $sum_money = 0;
            $query_product = "SELECT  code_product, name_product, saleprice_product, b.quantity_product FROM tb_bill a,tb_order b, tb_product c WHERE a.id_order = b.id_order && b.id_product = c.id_product && a.code_bill = '{$code_bill}'";
            $result_product = mysqli_query($dbc, $query_product);
             while ($rows = mysqli_fetch_assoc($result_product) ) {
               $sum_money += $rows['quantity_product']*$rows['saleprice_product'];
              } 
              echo number_format( $sum_money , 0, ',', '.') . ' VND';
          ?>
        </td>
      </tr>
      <tr>
        <td colspan="7">
          Bằng chữ: <?php  echo ''.convert_number_to_words( $sum_money).''; ?>
        </td>
      </tr>
    </tbody>
  </table>

</div>
<div class="row bottom">
  <div class="col-xs-6 left text-center">
    <div class="title-left">
      Người mua hàng
      <div class="text-title-left">
        (Ký và ghi rõ họ tên)
      </div>
    </div>
  </div>
  <div class="col-xs-6 right text-center">
    <div class="date">
      <?php 
      date_default_timezone_set("Asia/HO_CHI_MINH");
      ?>
      <span class="title">Ngày</span>
      <span class="value"><?php echo date("d"); ?></span>
      <span class="title">Tháng</span>
      <span class="value"><?php echo date("m"); ?></span>
      <span class="title">Năm</span>
      <span class="value"><?php echo date("Y"); ?></span>
    </div>
    <div class="title-right">
      Người bán hàng
      <div class="text-title-right">
        (Ký và ghi rõ họ tên)
      </div>
    </div>
  </div>
</div>
</div> 

</div>
<div class="print"><i class="glyphicon glyphicon-print"></i></div> 


<?PHP 
include('includes/footer.php');
?>

<script type="text/javascript">
  $('.print').click(function(){ 
    var generator = window.open("in");
    generator.document.write($('.wrap-print').html());
    generator.print();
    generator.close();
  })
</script>
