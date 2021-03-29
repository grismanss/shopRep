<?php
include("connect.php");
session_start();
$inputEmailadmin=$_POST['inputEmailadmin'];
$inputPasswordadmin=md5(trim($_POST['inputPasswordadmin']));
$s="select * from admin where login='$inputEmailadmin' 
and pass='$inputPasswordadmin'";
$rez=mysqli_query($link,$s);
$mas=array('status'=>0);
$n=mysqli_num_rows($rez);
if ($n!=0){
    $mas['status']=1;
    $_SESSION['admin']=1;
}
echo json_encode($mas);


?>