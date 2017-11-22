<?php
session_start();
include('../inc/myconnect.php');
include('../inc/function.php');


if(isset($_GET['id'])&& isset($_GET['size'] )&& isset($_GET['quantity'])){
    $query_product= "SELECT * FROM tb_product";
    $result_product=mysqli_query($dbc,$query_product);
    kt_query($query_product,$result_product);
    $data=array();

    while($product=mysqli_fetch_array($result_product,MYSQLI_ASSOC))
    {
        $data[$product['id_product']]=$product;
    }
    $id=$_GET['id'];
    $size=strtoupper($_GET['size']);
    $quantity=$_GET['quantity'];
    if(!isset($_SESSION['cart']) or empty($_SESSION['cart'])){
        $data[$id]['quantity'][$size]=$quantity;
        $_SESSION['cart'][$id]=$data[$id];

    }
    else{
        if(array_key_exists($id, $_SESSION['cart'])){
            if(array_key_exists($size, $_SESSION['cart'][$id]['quantity'])){
                $_SESSION['cart'][$id]['quantity'][$size]+=$quantity;
//                echo "<pre>";
//                print_r($_SESSION['cart'][$id]);
//                echo "</pre>";
            }
            else{
                $_SESSION['cart'][$id]['quantity'][$size]=$quantity;

            }

        }
        else{
            $data[$id]['quantity'][$size]=$quantity;
            $_SESSION['cart'][$id]=$data[$id];

        }
    }

}
else{
    header('location:../index.php');
}

// header('location:thongtingiohang.php');
echo "<pre>";
print_r($_SESSION['cart']);
echo "</pre>";
//session_destroy();

?>