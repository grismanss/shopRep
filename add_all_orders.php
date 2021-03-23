<?php
include("connect.php");
session_start();
$sum=$_POST['sum'];
$id_user=$_SESSION['id'];
$s="INSERT INTO `general_order`( `data`, `summa`,id_user,id_status) 
VALUES (CURRENT_TIMESTAMP,$sum,$id_user,6)";
mysqli_query($link,$s);
$s2="SELECT max(id) FROM `general_order`";
$rez=mysqli_query($link,$s2);
$mas=mysqli_fetch_array($rez);


echo $mas[0];




?>