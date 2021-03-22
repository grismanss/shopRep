<?php
include("connect.php");

$sum=$_POST['sum'];

$s="INSERT INTO `general_order`( `data`, `summa`) VALUES (CURRENT_TIMESTAMP,$sum)";
mysqli_query($link,$s);
$s2="SELECT max(id) FROM `general_order`";
$rez=mysqli_query($link,$s2);
$mas=mysqli_fetch_array($rez);


echo $mas[0];




?>