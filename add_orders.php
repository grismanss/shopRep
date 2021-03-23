<?php
session_start();
$maxid=$_POST['maxid'];
$id=$_SESSION['id'];
include("connect.php");
foreach ($_SESSION['korzina'] as $key => $value) {
   // if ($_SESSION['korzina'][$key]['id']==$id){
        $product_id=$_SESSION['korzina'][$key]['id'];
        $count=$_SESSION['korzina'][$key]['count'];

        $s="INSERT INTO `orders`( `general_order_id`, `user_id`, 
        `product_id`, `count`) 
        VALUES ($maxid,$id,$product_id,$count)";
        mysqli_query($link,$s);
        //echo $s;
    //}
}
unset ($_SESSION['korzina']);



?>