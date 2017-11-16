
<div id="footer-header">
		<div class="container">
			<div class="row" style="background: #2E2E2E;padding: 25px 0">

				<div class="col-xs-12 col-sm-5 wapper1">
					<img src="image/logo-bottom.png" class="img-responsive">
					<p class="nd">Thương hiệu thời trang nam 4MEN®
Chuyên các dòng sản phẩm thời trang nam: Quần jean, quần tây, quần kaki, áo sơ mi, áo khoác, áo vest, áo thun, phụ kiện nam,...</p>
					<span><a href="https://www.facebook.com/"><img src="image/icon/fb.svg" alt="" style="width:40px"></a></span>
				</div>

				<div class="col-xs-12 col-sm-offset-1 col-sm-3 wapper2">
					<h3><span><i class="glyphicon glyphicon-list-alt"></i></span>
						Danh mục
					</h3>
					<ul>
						<?PHP 
						$array = category_name();
						foreach ($array as $value) {
							$value = explode("-+&", $value);
						?>
						<li><span><i class="glyphicon glyphicon-ok"></i></span><a href="sp-category.php?category=<?php echo $value[0]; ?>" style="color: #ccc;text-decoration: none;text-transform: capitalize;"><?php echo $value[1]; ?></a></li>
						<?php
						}
						?>
						<!-- <li><span><i class="glyphicon glyphicon-ok"></i></span>Áo thun nam</li>
						<li><span><i class="glyphicon glyphicon-ok"></i></span>Áo khoác nam</li>
						<li><span><i class="glyphicon glyphicon-ok"></i></span>Áo vest nam</li>
						<li><span><i class="glyphicon glyphicon-ok"></i></span>Áo len nam</li>
						<li><span><i class="glyphicon glyphicon-ok"></i></span>Giày nam</li>
						<li><span><i class="glyphicon glyphicon-ok"></i></span>Thắt lưng nam</li>
						<li><span><i class="glyphicon glyphicon-ok"></i></span>Ví da nam</li> -->
					</ul>
				</div>

				<div class="col-xs-12 col-sm-3 wapper3">
					<h3><span><i class="glyphicon glyphicon-envelope"></i></span>
						Liên hệ
					</h3>
					<ul>
						<li><span><i class="glyphicon glyphicon-envelope"></i></span>Email: info@4menshop.com</li>
						<li><span><i class="glyphicon glyphicon-map-marker"></i></span>Địa chỉ 00000</li>
						<li><span><i class="glyphicon glyphicon-map-marker"></i></span>Địa chỉ 00000</li>
						<li><span><i class="glyphicon glyphicon-map-marker"></i></span>Địa chỉ 00000</li><li><span><i class="glyphicon glyphicon-map-marker"></i></span>Địa chỉ 00000</li>
					</ul>
				</div>


			</div>

		</div>
</div>
<footer>
		<div class="container">
			<div class="row">
				<!-- <ul class="footer-botom">
					<li><a href="">Giới thiệu</a></li>
					<li><a href="">Liên hệ</a></li>
					<li><a href="">Chính sách khách vip</a></li>
					<li><a href="">Câu hỏi thường gặp</a></li>
					<li><a href="">Chính sách bảo mật</a></li>
					<li><a href="">Chính sách cookie</a></li>

				</ul> -->
				<div class="div-footer">Copyright 2015 · by <span>3T</span> All rights reserved</div>
			</div>
		</div>
</footer>
