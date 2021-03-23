<?php

include("connect.php");
$dat=$_POST['dat'];
$s="SELECT * FROM `products` WHERE `name` LIKE '%$dat%'";
$rez=mysqli_query($link, $s);
$mas=array();
$n=mysqli_num_rows($rez);
for($i=0; $i<$n; $i++){
    $row=mysqli_fetch_array($rez);
    $mas[$i]=$row;
}

echo json_encode($mas);


?>