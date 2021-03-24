<?php
include("connect.php");

$s="SELECT * FROM `general_order` inner JOIN users on users.id=general_order.id_user inner JOIN status on status.id=general_order.id_status ORDER by `data` ASC";
$rez=mysqli_query($link, $s);

$mas=array();
$n=mysqli_num_rows($rez);
for($i=0; $i<$n; $i++){
    $row=mysqli_fetch_array($rez);
    $mas[$i]=$row;
}

echo json_encode($mas);


?>