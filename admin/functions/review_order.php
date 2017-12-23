<?php
	include('../inc/myconnect.php');
	include('../inc/function.php');
	if ( isset($_GET['id_order']) ) {
		$id_order = $_GET['id_order'];
		$query = "UPDATE tb_order SET  
					status_order = '1'
				WHERE code_order = {$id_order}";
		$result = mysqli_query($dbc, $query);

			header('location: ../list_order.php');

	} 
	else {
		header('location: ../list_order.php');
	}
?>