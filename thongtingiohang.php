<!DOCTYPE html>
<html>
<head>
	<title>Quần áo nam đẹp, quần áo hàng hiệu, cao cấp kiểu 2017</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style-main.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<style type="text/css">
		.errors{font-size: 12px; color:#bd0103;margin: 5px}
	</style>
</head>
<body style="margin-top: -20px">
<?php
	session_start();
if(!isset($_SESSION['cart']) or empty($_SESSION['cart'])){
    header('location:index.php');
}
	include('inc/myconnect.php');
	include('inc/function.php');
	// session_destroy();
	include('include/header.php');

?>

<div class="bcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ul>
						<li><a href="index.php">Trang chủ</a></li>
						<li style="background: url("")"><a href="">Thông tin giỏ hàng</a></li>
					</ul>
				</div>
			</div>
		</div>
</div>
<div class="thongtin">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 left">
				<form>
						<div class="lienhe">
							<h3>Thông tin liên hệ</h3>
							<hr>
							<div class="form-group height">
								<div class="col-xs-12 col-lg-4 nhan"><label class="name">Họ và tên *</label></div>
								<div class="col-xs-12 col-lg-8 wrapper-name">
									<input type="text" name="name" class="form-control">
									<div class="errors"></div>
									<span class='icon-notify' style='right: 20px'></span>
								</div>
							</div>
							<div class="form-group height">
								<div class="col-xs-12 col-lg-4 nhan"><label class="name">Email</label></div>
								<div class="col-xs-12 col-lg-8 wrapper-email">
									<input type="text" name="email" class="form-control" placeholder="Không bắt buộc">
									<div class="errors"></div>
									<span class='icon-notify' style='right: 20px'></span>
								</div>
							</div>
							<div class="form-group height">
								<div class="col-xs-12 col-lg-4 nhan"><label class="name">Số điện thoại *</label></div>
								<div class="col-xs-12 col-lg-8 wrapper-phone_number">
									<input type="text" name="phone_number" class="form-control">
									<div class="errors"></div>
									<span class='icon-notify' style='right: 20px'></span>
								</div>
							</div>
						</div>	
						<div class="diachi">
							<h3>Địa chỉ giao hàng</h3>
							<hr>
							<div class="form-group height">
								<div class="col-xs-12 col-lg-4 nhan"><label class="name">Chọn tỉnh thành *</label></div>
								<div class="col-xs-12 col-lg-8 wrapper-tinhthanh">
									<select name="tinhthanh" class="select tinhthanh">
										 	<option value="">--- Chọn tỉnh thành ---</option> 
										 	<option value="1">An Giang</option>
										 	<option value="2">Bà Rịa - Vũng Tàu</option> 
										 	<option value="7">Bắc Giang</option> 
										 	<option value="8">Bắc Kạn</option>							 	
										 	<option value="61">Bạc Liêu</option>
										 	<option value="9">Bắc Ninh</option>
										 	<option value="10">Bến Tre</option>
										 	<option value="3">Bình Dương</option> 
										 	<option value="4">Bình Phước</option> 
										 	<option value="5">Bình Thuận</option> 
										 	<option value="6">Bình Định</option> 
										 	<option value="12">Cà Mau</option> 
										 	<option value="13">Cần Thơ</option> 
										 	<option value="11">Cao Bằng</option> 
										 	<option value="14">Gia Lai</option> 
										 	<option value="15">Hà Giang</option> 
										 	<option value="16">Hà Nam</option> 
										 	<option value="17">Hà Nội</option> 
										 	<option value="19">Hà Tĩnh</option>
										 	<option value="22">Hải Dương</option> 					 	
										 	<option value="23">Hải Phòng</option> 
										 	<option value="63">Hậu Giang</option> 
										 	<option value="20">Hòa Bình</option> 
										 	<option value="21">Hưng Yên</option> 
										 	<option value="25">Khánh Hòa</option> 
										 	<option value="27">Kiên Giang</option> 
										 	<option value="28">Kon Tum</option> 
										 	<option value="29">Lai Châu</option>
										 	<option value="32">Lâm Đồng</option> 
										 	<option value="33">Lạng Sơn</option> 
										 	<option value="31">Lào Cai</option> 
										 	<option value="30">Long An</option> 
										 	<option value="34">Nam Định</option> 
										 	<option value="35">Nghệ An</option> 
										 	<option value="36">Ninh Bình</option> 
										 	<option value="37">Ninh Thuận</option> 
										 	<option value="38">Phú Thọ</option> 
										 	<option value="39">Phú Yên</option> 
										 	<option value="40">Quảng Bình</option> 
										 	<option value="41">Quảng Nam</option> 
										 	<option value="42">Quảng Ngãi</option> 
										 	<option value="43">Quảng Ninh</option> 
										 	<option value="44">Quảng Trị</option> 
										 	<option value="62">Sóc Trăng</option> 
										 	<option value="45">Sơn La</option> 
										 	<option value="53">Tây Ninh</option> 
										 	<option value="47">Thái Bình</option> 
										 	<option value="48">Thái Nguyên</option> 
										 	<option value="46">Thanh Hóa</option> 
										 	<option value="49">Thừa Thiên - Huế</option> 
										 	<option value="50">Tiền Giang</option> 
										 	<option value="24">Tp. HCM</option> 
										 	<option value="51">Trà Vinh</option> 
										 	<option value="52">Tuyên Quang</option> 
										 	<option value="54">Vĩnh Long</option> 
										 	<option value="55">Vĩnh Phúc</option> 
										 	<option value="56">Yên Bái</option> 
										 	<option value="57">Đà Nẵng</option> 
										 	<option value="58">Đắk Lắk</option> 
										 	<option value="64">Đắk Nông</option> 
										 	<option value="69">Điện Biên</option> 
										 	<option value="59">Đồng Nai</option> 
										 	<option value="60">Đồng Tháp</option> 
										 	
									</select>
									<div class="errors"></div>

								</div>
							</div>
							<div class="form-group height">
								<div class="col-xs-12 col-lg-4 nhan"><label class="name">Chọn quận huyện *</label></div>
								<div class="col-xs-12 col-lg-8 wrapper-quanhuyen">
									<select name="quanhuyen" class="select select-districts">
										<option value="">Bạn chưa chọn tỉnh thành</option> 

									</select>
									<div class="errors"></div>
								</div>
							</div>
							<div class="form-group height">
								<div class="col-xs-12 col-lg-4 nhan"><label class="name">Tên phường/Xã *</label></div>
								<div class="col-xs-12 col-lg-8 wrapper-phuong-xa">
									<input type="text" name="phuong-xa" class="form-control">
									<div class="errors"></div>
									<span class='icon-notify' style='right: 20px'></span>
								</div>
							</div>
							<div class="form-group height">
								<div class="col-xs-12 col-lg-4 nhan"><label class="name">Số nhà, tên đường *</label></div>
								<div class="col-xs-12 col-lg-8 wrapper-sonha-tenduong">
									<input type="text" name="sonha-tenduong" class="form-control">
									<div class="errors"></div>
									<span class='icon-notify' style='right: 20px'></span>
								</div>
								
							</div>
							<div class="form-group height">
								<div class="col-xs-12 col-lg-4 nhan"><label class="name">Ghi chú</label></div>
								<div class="col-xs-12 col-lg-8"><textarea class="form-control"></textarea></div>
							</div>
						</div>	
						<!-- <div class="form-group height submitdk">
							<div class="col-xs-12 col-lg-offset-4 col-lg-8">
								<span class="guidonhang" style="cursor: pointer;">
									<span class="text">gửi đơn hàng</span>
								</span>
							</div>
						</div> -->
					</div>
				</form>
				
			<div class="col-xs-12 col-sm-6 right">
				<h3>Giỏ hàng của bạn<small class="load" style="float: right;opacity:0;transition: all 1s;">Cập nhật thành công</small><div style="clear: both;"></div></h3>
				<hr>
				<table class="table">
					<thead>
						<tr style="font-weight: 700;color: #444;font-size: 13px">
							<th>Hình</th>
							<th>Thông tin sản phẩm</th>
							<th>SL</th>
							<th>Đơn giá	</th>
							<th>Tổng</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody class="tt_product">
					<?php 
					

							 if(isset($_SESSION['cart']) or !empty($_SESSION['cart'])){
							 	foreach ($_SESSION['cart'] as $key => $value) {	
						?>
						<tr class="sp<?php echo $value['id_product'] ?>">
							<td rowspan="
							<?php 
								$soluong=0; 
								foreach ($value['quantity'] as $value1) { $soluong++;} 
									echo $soluong +1;

							?>
							" class="sl-product">
                                <a class="img-thumbnail" href="product.php?id=<?php echo $value['id_product'];?>">
								<?php
                                $img_product = explode(" ", $value['image_thump']);
								
								echo '<img src="'.$img_product[0].'" width="48px" >';
								 ?>
                                </a>
							</td>
							<td>
								<strong class="name-product"><a href="product.php?id=<?php echo $value['id_product']; ?>"><?php echo $value['name_product']; ?></a></strong>
							</td>
							<td class="sl-product<?php echo $value['id_product']; ?>"><?php $soluong_product=0;
								foreach ($value['quantity'] as $sl_product) { $soluong_product+=$sl_product;} 
									echo $soluong_product ; ?></td>
							<td style="font-family: georgia;"><?php echo number_format($value['saleprice_product'], 0,',','.');?></td>
							<td style="font-family: georgia;" class="price<?php echo $value['id_product']; ?>"><?php echo number_format($soluong_product *$value['saleprice_product'], 0,',','.');?></td>
							</tr>
							<?php 
									foreach ($value['quantity'] as $product_key => $product_val) { 
										
							?>
							<tr class="sp<?php echo $value['id_product']; ?> xoa-sp" product="<?php
							echo $value['id_product']; ?>">
								<td align="right">Size: <?php echo $product_key; ?></td>
								<td colspan="3">
									<input type="number" name="soluong"  value="<?php echo $product_val  ?>" min="1" max="10" style="width: 60px;text-align: center;" class="form-control" size="<?php echo $product_key; ?>" cart="<?php echo $value['id_product']; ?>" val="<?php echo $product_val  ?>" price="<?php echo $value['saleprice_product'];?>">
								</td>
								<td>
									<input type="button" name="xoa" value="Xóa" class="btn btn-default delete-product" style="padding: 3px;" size="<?php echo $product_key; ?>">
								</td>
							</tr>
						<?php
									}
								}
							 }
							
						?>
						 <tr >
							<td colspan="6" style="text-align: right;border: none;"><a href="index.php" class="btn btn-default" style="font-size: 14px">Quay về</a></td>
							<div></div>
						</tr>
						
						
					</tbody>
				</table>
				<table class="table" style="font-size: 14px;">
					<tbody>
						<tr>
							<td colspan="2" style="font-size: 18px;font-weight: 700;border-top:none; ">Tổng</td>
						</tr>
						<tr>
							<td>Số tiền mua hàng</td>
							<td id="price-buy" align="right">0</td>
						</tr>
					<!-- 	<tr>
							<td align="right">Phí vận chuyển</td>
							<td id="shipPriceAlly" align="right">925,000</td>
						</tr>
						<tr>
							<td align="right">Tổng tiền:</td>
							<td id="sumTotalBill" align="right">925,000</td>
						</tr> -->
					</tbody>
				</table>
				<div style="clear: both;"></div>
				
					<span class="guidonhang">
					<span class="text">gửi đơn hàng</span>
					</span>
				

			</div>
		</div>
	</div>
</div>
<?php
	include('include/footer.php');
?>
 <script src="js/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="js/jquery-main.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("input[name='name']").focusout(function(){
			if($(this).val()){
				$(this).parent().removeClass("has-error has-feedback");
				$(this).parent().addClass("has-success has-feedback");
				$(this).next(".errors").html("");
				$(".wrapper-name .icon-notify").removeClass("glyphicon glyphicon-remove form-control-feedback");
				$(".wrapper-name .icon-notify").addClass("glyphicon glyphicon-ok form-control-feedback");		
			}else{
				$(this).parent().removeClass("has-success has-feedback");
				$(this).parent().addClass("has-error has-feedback");
				$(this).next(".errors").html("Họ và tên không được bỏ trống !!");
				$(".wrapper-name .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
				$(".wrapper-name .icon-notify").addClass("glyphicon glyphicon-remove form-control-feedback");
			}
		});
		$("input[name='email']").focusout(function(){
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
			if($(this).val()){
				if (!filter.test($(this).val().trim())) {
				 	$(this).parent().removeClass("has-success has-feedback");
					$(this).parent().addClass("has-error has-feedback");
					$(this).next(".errors").html("Email không hợp lệ !!");
					$(".wrapper-email .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
					$(".wrapper-email .icon-notify").addClass("glyphicon glyphicon-remove form-control-feedback"); 	
				}else{
					$(this).parent().removeClass("has-error has-feedback");
					$(this).parent().addClass("has-success has-feedback");
					$(this).next(".errors").html("");
					$(".wrapper-email .icon-notify").removeClass("glyphicon glyphicon-remove form-control-feedback");
					$(".wrapper-email .icon-notify").addClass("glyphicon glyphicon-ok form-control-feedback");		
				}
			}else{
				$(this).parent().removeClass("has-error has-feedback");
				$(this).parent().removeClass("has-success has-feedback");
				$(".wrapper-email .icon-notify").removeClass("glyphicon glyphicon-remove form-control-feedback");
				$(".wrapper-email .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
				$(this).next(".errors").html("");
			
			}
		});
		$("input[name='phone_number']").focusout(function(){
			 var filter = /^[0-9-+]+$/; 
			if($(this).val()){
				if (!filter.test($(this).val().trim())) {
				 	$(this).parent().removeClass("has-success has-feedback");
					$(this).parent().addClass("has-error has-feedback");
					$(this).next(".errors").html("Số điện thoại không hợp lệ");
					$(".wrapper-phone_number .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
					$(".wrapper-phone_number .icon-notify").addClass("glyphicon glyphicon-remove form-control-feedback"); 	
				}else{
					$(this).parent().removeClass("has-error has-feedback");
					$(this).parent().addClass("has-success has-feedback");
					$(this).next(".errors").html("");
					$(".wrapper-phone_number .icon-notify").removeClass("glyphicon glyphicon-remove form-control-feedback");
					$(".wrapper-phone_number .icon-notify").addClass("glyphicon glyphicon-ok form-control-feedback");		
				}
			}else{
				$(this).parent().removeClass("has-success has-feedback");
				$(this).parent().addClass("has-error has-feedback");
				$(this).next(".errors").html("Số điện thoại không được bỏ trống !!");
				$(".wrapper-phone_number .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
				$(".wrapper-phone_number .icon-notify").addClass("glyphicon glyphicon-remove form-control-feedback");
			}
		});

		$("input[name='sonha-tenduong']").focusout(function(){
			if($(this).val()){
				$(this).parent().removeClass("has-error has-feedback");
				$(this).parent().addClass("has-success has-feedback");
				$(this).next(".errors").html("");
				$(".wrapper-sonha-tenduong .icon-notify").removeClass("glyphicon glyphicon-remove form-control-feedback");
				$(".wrapper-sonha-tenduong .icon-notify").addClass("glyphicon glyphicon-ok form-control-feedback");		
			}else{
				$(this).parent().removeClass("has-success has-feedback");
				$(this).parent().addClass("has-error has-feedback");
				$(this).next(".errors").html("Không được bỏ trống !!");
				$(".wrapper-sonha-tenduong .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
				$(".wrapper-sonha-tenduong .icon-notify").addClass("glyphicon glyphicon-remove form-control-feedback");
			}
		});
		$("input[name='phuong-xa']").focusout(function(){
			if($(this).val()){
				$(this).parent().removeClass("has-error has-feedback");
				$(this).parent().addClass("has-success has-feedback");
				$(this).next(".errors").html("");
				$(".wrapper-phuong-xa .icon-notify").removeClass("glyphicon glyphicon-remove form-control-feedback");
				$(".wrapper-phuong-xa .icon-notify").addClass("glyphicon glyphicon-ok form-control-feedback");		
			}else{
				$(this).parent().removeClass("has-success has-feedback");
				$(this).parent().addClass("has-error has-feedback");
				$(this).next(".errors").html("Không được bỏ trống !!");
				$(".wrapper-phuong-xa .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
				$(".wrapper-phuong-xa .icon-notify").addClass("glyphicon glyphicon-remove form-control-feedback");
			}
		});



		// Gửi đơn hàng
		$(".guidonhang").click(function(){
			var errors = [];
			//kiem tra tinh thanh 
			if($('select[name="tinhthanh"]').find(":selected").val()==""){
				errors.push("error");
				$(".wrapper-tinhthanh .errors").html("Tỉnh thành không được bỏ trống !!");
			}else{
				$(".wrapper-tinhthanh .errors").html("");
			}
			if($('select[name="quanhuyen"]').find(":selected").val()==""){
				errors.push("error");
				$(".wrapper-quanhuyen .errors").html("Quận huyện không được bỏ trống !!");
			}else{
				$(".wrapper-quanhuyen .errors").html("");
			}
			//kiem tra ten
			if($("input[name='name']").val()){
				$("input[name='name']").parent().removeClass("has-error has-feedback");
				$("input[name='name']").parent().addClass("has-success has-feedback");
				$("input[name='name']").next(".errors").html("");
				$(".wrapper-name .icon-notify").removeClass("glyphicon glyphicon-remove form-control-feedback");
				$(".wrapper-name .icon-notify").addClass("glyphicon glyphicon-ok form-control-feedback");		
			}else{
				errors.push("error");
				$("input[name='name']").parent().removeClass("has-success has-feedback");
				$("input[name='name']").parent().addClass("has-error has-feedback");
				$("input[name='name']").next(".errors").html("Họ và tên không được bỏ trống !!");
				$(".wrapper-name .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
				$(".wrapper-name .icon-notify").addClass("glyphicon glyphicon-remove form-control-feedback");
			}
			//kiem tra email
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
			if($("input[name='email']").val()){
				if (!filter.test($("input[name='email']").val().trim())) {
					errors.push("error");
				 	$("input[name='email']").parent().removeClass("has-success has-feedback");
					$("input[name='email']").parent().addClass("has-error has-feedback");
					$("input[name='email']").next(".errors").html("Email không hợp lệ !!");
					$(".wrapper-email .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
					$(".wrapper-email .icon-notify").addClass("glyphicon glyphicon-remove form-control-feedback"); 	
				}else{
					$("input[name='email']").parent().removeClass("has-error has-feedback");
					$("input[name='email']").parent().addClass("has-success has-feedback");
					$("input[name='email']").next(".errors").html("");
					$(".wrapper-email .icon-notify").removeClass("glyphicon glyphicon-remove form-control-feedback");
					$(".wrapper-email .icon-notify").addClass("glyphicon glyphicon-ok form-control-feedback");		
				}
			}else{
				$("input[name='email']").parent().removeClass("has-error has-feedback");
				$("input[name='email']").parent().removeClass("has-success has-feedback");
				$(".wrapper-email .icon-notify").removeClass("glyphicon glyphicon-remove form-control-feedback");
				$(".wrapper-email .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
				$("input[name='email']").next(".errors").html("");
			
			}
			// kiem so dien thoai
			 var filter = /^[0-9-+]+$/; 
			if($("input[name='phone_number']").val()){
				if (!filter.test($("input[name='phone_number']").val().trim())) {
					errors.push("error");
				 	$("input[name='phone_number']").parent().removeClass("has-success has-feedback");
					$("input[name='phone_number']").parent().addClass("has-error has-feedback");
					$("input[name='phone_number']").next(".errors").html("Số điện thoại không hợp lệ");
					$(".wrapper-phone_number .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
					$(".wrapper-phone_number .icon-notify").addClass("glyphicon glyphicon-remove form-control-feedback"); 	
				}else{
					$("input[name='phone_number']").parent().removeClass("has-error has-feedback");
					$("input[name='phone_number']").parent().addClass("has-success has-feedback");
					$("input[name='phone_number']").next(".errors").html("");
					$(".wrapper-phone_number .icon-notify").removeClass("glyphicon glyphicon-remove form-control-feedback");
					$(".wrapper-phone_number .icon-notify").addClass("glyphicon glyphicon-ok form-control-feedback");		
				}
			}else{
				errors.push("error");
				$("input[name='phone_number']").parent().removeClass("has-success has-feedback");
				$("input[name='phone_number']").parent().addClass("has-error has-feedback");
				$("input[name='phone_number']").next(".errors").html("Số điện thoại không được bỏ trống !!");
				$(".wrapper-phone_number .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
				$(".wrapper-phone_number .icon-notify").addClass("glyphicon glyphicon-remove form-control-feedback");
			}
			//kiem tra so nha && ten duong
			if($("input[name='sonha-tenduong']").val()){
				$("input[name='sonha-tenduong']").parent().removeClass("has-error has-feedback");
				$("input[name='sonha-tenduong']").parent().addClass("has-success has-feedback");
				$("input[name='sonha-tenduong']").next(".errors").html("");
				$(".wrapper-sonha-tenduong .icon-notify").removeClass("glyphicon glyphicon-remove form-control-feedback");
				$(".wrapper-sonha-tenduong .icon-notify").addClass("glyphicon glyphicon-ok form-control-feedback");		
			}else{
				errors.push("error");
				$("input[name='sonha-tenduong']").parent().removeClass("has-success has-feedback");
				$("input[name='sonha-tenduong']").parent().addClass("has-error has-feedback");
				$("input[name='sonha-tenduong']").next(".errors").html("Không được bỏ trống !!");
				$(".wrapper-sonha-tenduong .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
				$(".wrapper-sonha-tenduong .icon-notify").addClass("glyphicon glyphicon-remove form-control-feedback");
			}
			// kiem tra phuong && xa
			if($("input[name='phuong-xa']").val()){
				$("input[name='phuong-xa']").parent().removeClass("has-error has-feedback");
				$("input[name='phuong-xa']").parent().addClass("has-success has-feedback");
				$("input[name='phuong-xa']").next(".errors").html("");
				$(".wrapper-phuong-xa .icon-notify").removeClass("glyphicon glyphicon-remove form-control-feedback");
				$(".wrapper-phuong-xa .icon-notify").addClass("glyphicon glyphicon-ok form-control-feedback");		
			}else{
				errors.push("error");
				$("input[name='phuong-xa']").parent().removeClass("has-success has-feedback");
				$("input[name='phuong-xa']").parent().addClass("has-error has-feedback");
				$("input[name='phuong-xa']").next(".errors").html("Không được bỏ trống !!");
				$(".wrapper-phuong-xa .icon-notify").removeClass("glyphicon glyphicon-ok form-control-feedback");
				$(".wrapper-phuong-xa .icon-notify").addClass("glyphicon glyphicon-remove form-control-feedback");
			}
			
			if(errors.length==0){
				var name =$("input[name='name']").val();
				var email =$("input[name='email']").val();
				var sdt = $("input[name='phone_number']").val();
				var tinh_thanh = $(".tinhthanh").find(":selected").text();
				var quan_huyen =$('select[name="quanhuyen"]').find(":selected").text();
				var sonha_tenduong=$("input[name='sonha-tenduong']").val();
				var phuong_xa =$("input[name='phuong-xa']").val();
				$.get("xuli/gui-don-hang.php",{
					name:name,
					email:email,
					sdt:sdt,
					tinh:tinh_thanh,
					quan:quan_huyen,
					sonha:sonha_tenduong,
					phuong:phuong_xa
				},function(){
					window.location.href = "gui-hang-thanh-cong.php";
				});
			}
		});
	

		$.get('xuli-seeproduct/tong-tien.php',function(data){
			$('#price-buy').text(data);	
		});
		//
		$('.tt_product .delete-product').click(function(){
			var id =$(this).parents('.xoa-sp').attr('product');
			var size = $(this).attr('size');

			$.get('xuli-seeproduct/delete-size.php',{id:id,size:size},function(data){
				if(data==1){
					$(this).parents('.xoa-sp').remove();

				}
				else{
					$('.sp'+id).remove();
				}
			});
			$(this).parents('.xoa-sp').remove();
			$.get('xuli-seeproduct/tong-tien.php',function(data){
				$('#price-buy').text(data);	
			});
			var length = $('.tt_product tr').length;
			if(length==2){
				window.location.href = "index.php";
			}
		});
	});
</script>
</body>
</html>