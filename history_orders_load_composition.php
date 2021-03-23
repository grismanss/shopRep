<?php
include("connect.php");

$id_order=$_POST['id_order'];
$s="SELECT * FROM `orders` inner JOIN products on 
products.id=orders.product_id WHERE `general_order_id`=$id_order";
$rez=mysqli_query($link, $s);
$mas=array();
$n=mysqli_num_rows($rez);
for($i=0; $i<$n; $i++){
    $row=mysqli_fetch_array($rez);
    $mas[$i]=$row;
}

echo json_encode($mas);


?>