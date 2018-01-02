<?php
include('../inc/myconnect.php');
include('../inc/function.php');
if ( isset($_GET['id_order']) ) {
	$id_order = $_GET['id_order'];
		$query = "UPDATE tb_order SET  
					status_order = '1'
				WHERE code_order = {$id_order}";
		$result = mysqli_query($dbc, $query);


	// tru so luong san pham khi khach hàng đặt sản pham do
	$query = "SELECT tb_order.id_product id_product, tb_order.size_product size_order, tb_order.quantity_product quantity_order, tb_product.size_product array_size FROM tb_product, tb_order WHERE tb_product.id_product=tb_order.id_product && code_order=$id_order  GROUP BY tb_order.id_product ORDER BY tb_order.id_product ASC";
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
	header('location: ../list_order.php');

} 
else {
		header('location: ../list_order.php');
}
?>