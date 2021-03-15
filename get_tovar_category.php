<?php
include("connect.php");
$id=$_POST['id'];
//$id=1;
$s="SELECT * FROM `products` where category_id=$id";
$res=mysqli_query($link, $s);
$n=mysqli_num_rows($res);
$mas=array();
for ($i=0; $i<$n;$i++){
    $row=mysqli_fetch_array($res);
    $mas[$i]= $row;

    
}
echo json_encode($mas);

?>