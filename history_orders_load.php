<?php
include("connect.php");
session_start();
$id=$_SESSION['id'];

$s="SELECT * FROM `general_order` inner join status on 
status.id=general_order.id_status WHERE `id_user`=$id";
$rez=mysqli_query($link, $s);
$mas=array();
$n=mysqli_num_rows($rez);
for($i=0; $i<$n; $i++){
    $row=mysqli_fetch_array($rez);
    $mas[$i]=$row;
}

echo json_encode($mas);


?>