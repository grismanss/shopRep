<?php
session_start();
include("connect.php");
$id=$_SESSION['id'];
$oldpass=md5(trim($_POST['oldpass']));
$newpass=md5(trim($_POST['newpass']));
$s="SELECT * FROM users WHERE id=$id and pass='$oldpass'";
$res=mysqli_query($link, $s);
$n=mysqli_num_rows($res);
if ($n==0){
    echo 0;
}
else{
    $s1="UPDATE `users` SET   `pass`='$newpass' WHERE id=$id";
    $r1=mysqli_query($link,$s1);
    echo 1;
}


?>