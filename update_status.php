<?php
include("connect.php");
$id_zakaz=$_POST['id_zakaz'];
$my_select=$_POST['my_select'];

$s="UPDATE `general_order` SET `id_status`=$my_select WHERE `id`=$id_zakaz ";
$rez=mysqli_query($link, $s);

$s2="select `email` from users where 
id=(SELECT `id_user` FROM `general_order` WHERE `id`=$id_zakaz) ";
$rez2=mysqli_query($link, $s2);
$mas=mysqli_fetch_array($rez2);

if ($mas[0]!="")
    mail($mas[0], "My Subject", "Line 1\nLine 2\nLine 3");
//echo $mas[0];


?>