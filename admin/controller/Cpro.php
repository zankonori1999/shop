<?php 
    include_once 'model/Mpro.php';
    //PHP codes
    $class = new Pro();
    switch ($action)
    {
        case 'add':
            $procats = $class->procat_list("0");
        break;
        case 'list':
            $Prolists = $class->pro_list();
        break;
        case 'delete':
            $class->pro_delete($_GET['id']);
            header("location:index.php?c=pro&a=list");
        break;
        case 'edit':
            $procats = $class->procat_list();
            $details = $class->pro_edit_show($_GET['id']);
        break;
    }
    //PHP codes
    include_once "view/{$controller}/${action}.php";
?>