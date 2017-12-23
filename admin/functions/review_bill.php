<?php
	include('../inc/myconnect.php');
	include('../inc/function.php');
	if ( isset($_GET['id_order']) ) {
		$code_order = $_GET['id_order'];
		$query = "UPDATE tb_order SET  
					status_bill = '1'
				WHERE code_order = {$code_order}";
		$result = mysqli_query($dbc, $query);

		// Tạo hóa đơn
		$code_bill = ramdom_code();
		$query_code_order = "SELECT id_order FROM tb_order WHERE code_order = {$code_order}";
		$result_code_order = mysqli_query($dbc, $query_code_order);
		while ( $rows = mysqli_fetch_array($result_code_order, MYSQLI_ASSOC) ) {
			$id_order = $rows['id_order'];
			$query_bill = "INSERT INTO `tb_bill`(`code_bill`, `id_order`) VALUES ('{$code_bill}','{$id_order}')";
			// echo '<pre>';
			// print_r($query_bill);
			// echo '</pre>';
			$result_bill = mysqli_query($dbc, $query_bill);
		}
		
		
		header('location: ../list_bill.php');

	} 
	else {
		header('location: ../list_bill.php');
	}
?>