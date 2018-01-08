<?php
	include('../inc/myconnect.php');
	include('../inc/function.php');
	if ( isset($_GET['code_ship']) ) {
		$code_ship = $_GET['code_ship'];
		$query = "UPDATE tb_ship SET  
					status_ship = '1'
				WHERE code_ship = {$code_ship}";
		$result = mysqli_query($dbc, $query);
			

	// tru so luong san pham khi khach hàng đặt sản pham do
	$query = "SELECT tb_order.id_product id_product, tb_order.size_product size_order, tb_order.quantity_product quantity_order, tb_product.size_product array_size FROM tb_product, tb_order,tb_ship,tb_bill WHERE tb_ship.id_bill = tb_bill.id_bill && tb_bill.id_order = tb_order.id_order && tb_product.id_product=tb_order.id_product && code_ship=$code_ship  GROUP BY tb_order.id_product ORDER BY tb_order.id_product ASC";
	$result = mysqli_query($dbc, $query);
	extract(mysqli_fetch_array($result, MYSQLI_ASSOC));
	$array_size = unserialize($array_size);
	$array_size[strtolower($size_order)] = $array_size[strtolower($size_order)] - $quantity_order;
	$array_size = Serialize($array_size);
	// UPDATE product 
	$query_product = "UPDATE tb_product SET  
					size_product = '{$array_size}'
				WHERE id_product = '{$id_product}'";
				echo $query_product;
	$result_product = mysqli_query($dbc, $query_product);

		// header('location: ../list_delivery.php');
	} 
	else {
		header('location: ../list_delivery.php');
	}


?>