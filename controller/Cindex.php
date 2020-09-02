<?php 
    include_once 'model/Mindex.php';
    //PHP codes
    $pro = new ProShow();
    $lists = $pro->pro_list();
    //PHP codes
    include_once "view/{$controller}/{$action}.php";
?>