<?php
include("connect.php");
$s="SELECT * FROM `products` order by `price` DESC";
$res=mysqli_query($link, $s);

$mas=array();
for ($i=0; $i<6;$i++){
    $row=mysqli_fetch_array($res);
    $mas[$i]= $row;

    
}
echo json_encode($mas);

?>