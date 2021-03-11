<?php
session_start();
$mas=array("status"=> "",  "login"=>"");
if (isset($_SESSION['login'])){
    $mas["status"]=1;
    $mas["login"]=$_SESSION['login'];
}
else
{
    $mas["status"]=0;
    $mas["login"]="";
}

echo json_encode($mas);
?>