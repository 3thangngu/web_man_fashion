<?php
	session_start();
	include('../inc/myconnect.php');
	include('../inc/function.php');
	
	if(isset($_SESSION['cart']) or !empty($_SESSION['cart']) && isset($_GET['name']) && isset($_GET['email']) && isset($_GET['name']) && isset($_GET['sdt']) && isset($_GET['tinh']) && isset( $_GET['quan']) && isset($_GET['sonha']) && isset($_GET['phuong'])){
		$name = $_GET['name'];
		$email = $_GET['email'];
		$sdt = $_GET['sdt'];
		$tinh = $_GET['tinh'];
		$quan = $_GET['quan'];
		$sonha = $_GET['sonha'];
		$phuong = $_GET['phuong'];
		$code_order = ramdom_code();
		$address_customer = $sonha . " ". $phuong . " " . $quan . " ".$tinh;
		$order_day =  date('h:i:sa Y-m-d');
			foreach ($_SESSION['cart'] as $value) {
				$id_product = $value['id_product'];
				foreach ($value['quantity'] as $key_sl => $value_sl) {
					$size_product =   $key_sl;
					$quantity_product = $value_sl;
					$query= "INSERT INTO tb_order(
											code_order,
											status_order,
											id_ship, 
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
		header('location:../gui-hang-thanh-cong.php');
	}
?>