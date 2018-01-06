<?php 
	include('../inc/myconnect.php');
	include('../inc/function.php');
	$id =$_GET['value'];
	$tinhthanh=array(
		"1" => array('Thành phố Long Xuyên','Thành phố Châu Đốc','Thị xã Tân Châu','Huyện Châu Thành','Huyện Châu Phú','Huyện Tịnh Biên','Huyện An Phú','Huyện Phú Tân','Huyện Chợ Mới','Huyện Thoại Sơn','Huyện Tri Tôn'),
		"2" => array('Thành phố Vũng Tàu','Thành Phố Bà Rịa','Huyện Châu Đức','Huyện Xuyên Mộc','Huyện Tân Thành','Huyện Long Đất','Huyện Côn Đảo','Huyện Long Đất'),
		"3" => array('Thành Phố Thủ Dầu Một','Thị Xã Bến Cát','Thị Xã Tân Uyên','Thị Xã Thuận An','Thị xã Dĩ An','Huyện Bàu Bàng','Huyện Bắc Tân Uyên','Huyện Dầu Tiếng','Huyện Phú Giáo'),
		"4" => array('Thị xã Đồng Xoài','Huyện Bù Đốp','huyện Bù Gia Mập','huyện Chơn Thành','Huyện Hớn Quảng','Huyện Đồng Phú','Thị Xã Phước Long','Huyện Lộc Ninh','Huyện Bù Đăng','Thị Xã Bình Long'),
		"5" => array('Thành Phố Phan Thiết','Huyện Tuy Phong','Huyện Bắc Bình','Huyện Hàm Thuận Bắc','Huyện Hàm Thuận Nam','Huyện Tánh Linh','Huyện Hàm Tân','Huyện Đức Linh','Huyện Phú Qúy','Thị xã La Gi'),
		// "6" => array('','','','','','','','','','','','','','',)
		// "7" => array('','','','','','','','','','','','','','',)
		// "8" => array('','','','','','','','','','','','','','',)
		// "9" => array('','','','','','','','','','','','','','',)
		// "10" => array('','','','','','','','','','','','','','',)
		// "11" => array('','','','','','','','','','','','','','',)
		// "12" => array('','','','','','','','','','','','','','',)
		// "13" => array('','','','','','','','','','','','','','',)
		// "14" => array('','','','','','','','','','','','','','',)

	);
	$query = "SELECT * FROM tb_district WHERE id_city = $id";
	$result = mysqli_query($dbc, $query);

	echo "<option value=''>Bạn chưa chọn tỉnh thành</option>";
	while ($rows = mysqli_fetch_assoc($result)) {
	?>

	<option value="<?php echo $rows['id_district'] ?>"><?php echo $rows['name_district'] ?></option>
	<?php
	}
?>