<?php
session_start();
include("connect.php");
$mas=array();
foreach ($_SESSION['korzina'] as $key => $value) {
    /*if ($_SESSION['korzina'][$key]['id']==$id){
        $k=$_SESSION['korzina'][$key]['count'];
        $_SESSION['korzina'][$key]['count']+=1;
    }*/

    $id_tovar=$_SESSION['korzina'][$key]['id'];
    $s="SELECT * FROM `products` WHERE `id`= $id_tovar";
    $res=mysqli_query($link, $s);
    $row=mysqli_fetch_array($res);
    $mas2=array('tovar'=>json_encode($row), 'count'=>$_SESSION['korzina'][$key]['count']);
    array_push($mas,json_encode($mas2));

}
echo json_encode($mas);
?>