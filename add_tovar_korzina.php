<?php
session_start();
$id=$_POST['id'];
$tovar=array('id'=>$id, 'count'=>1);
if (!isset($_SESSION['korzina'])){
    $_SESSION['korzina']=array();
}
$k=0;
foreach ($_SESSION['korzina'] as $key => $value) {
    if ($_SESSION['korzina'][$key]['id']==$id){
        $k=$_SESSION['korzina'][$key]['count'];
        $_SESSION['korzina'][$key]['count']+=1;
    }
}
if ($k==0)
    array_push($_SESSION['korzina'],$tovar);

foreach ($_SESSION['korzina'] as $key => $value) {
    if ($_SESSION['korzina'][$key]['id']==""){
        unset($_SESSION['korzina'][$key]);
    }
}

//print_r($_SESSION);


?>