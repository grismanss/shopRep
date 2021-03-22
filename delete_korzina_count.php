<?php
session_start();
$id=$_POST['id'];

foreach ($_SESSION['korzina'] as $key => $value) {
    if ($_SESSION['korzina'][$key]['id']==$id){
        
        unset($_SESSION['korzina'][$key]);
    }
}
?>