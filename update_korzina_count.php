<?php
session_start();
$count=$_POST['count'];
$id=$_POST['id'];

foreach ($_SESSION['korzina'] as $key => $value) {
    if ($_SESSION['korzina'][$key]['id']==$id){
        
        $_SESSION['korzina'][$key]['count']=$count;
    }
}


?>