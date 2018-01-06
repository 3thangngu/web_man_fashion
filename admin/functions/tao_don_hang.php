<?php
	session_start();
	include('../inc/myconnect.php');
	include('../inc/function.php');
	
	if(isset($_SESSION['order']) or !empty($_SESSION['order']) && isset($_GET['name']) && isset($_GET['email']) && isset($_GET['name']) && isset($_GET['sdt']) && isset($_GET['tinh']) && isset( $_GET['quan']) && isset($_GET['sonha']) && isset($_GET['phuong']) && isset($_GET['code_order'])){
		$code_order = $_GET['code_order'];
		$name = $_GET['name'];
		$email = $_GET['email'];
		$sdt = $_GET['sdt'];
		$tinh = $_GET['tinh'];
		$quan = $_GET['quan'];
		$sonha = $_GET['sonha'];
		$phuong = $_GET['phuong'];
		$code_order = $_GET['code_order'];
		$address_customer = $sonha . ", ". $phuong . ", " . $quan . ", ".$tinh;
		// date_default_timezone_set("Asia/HO_CHI_MINH");
		$order_day = $_GET['date'];
			foreach ($_SESSION['order'] as $value) {
				$id_product = $value['id_product'];
				foreach ($value['quanlity'] as $key_sl => $value_sl) {
					print_r($value['quanlity']);
					$size_product =  $key_sl;
					$quantity_product = $value_sl;
					$query= "INSERT INTO tb_order(
											code_order,
											status_order,
											status_bill,
											id_product,
											size_product,
											quantity_product,
											name_customer, 
											phone_customer,
											address_customer,
											email_customer,
											order_day
										) VALUES(
										'{$code_order}',
										'0',
										'0',
										'{$id_product}', 
										'{$size_product}', 
										'{$quantity_product}', 
										'{$name}', 
										'{$sdt}', 
										'{$address_customer}', 
										'{$email}',
										'{$order_day}'
									)";

				$result =  mysqli_query($dbc,$query);
				}
				

				// header('location:../gui-hang-thanh-cong.php');
			}	
			unset($_SESSION['order']);
		// header('location:../gui-hang-thanh-cong.php');
	}
?>