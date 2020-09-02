<?php 
    include_once 'model/Mprocat.php';
    //PHP CODES
    $class = new Procat();

    switch($action)
    {
        case 'list':
            $lists = $class->procat_list();
        break;
        case 'add':
            $mainLists = $class->procat_main_list();
        break;
        case 'delete':
            $class->procat_delete($_GET['id']);
            header("location:index.php?c=procat&a=list");
        break;
        case 'edit':
            $mainLists = $class->procat_main_list();
            $res = $class->procat_edit_show($_GET['id']);
        break;
    }
    //PHP CODES
    include_once "view/{$controller}/{$action}.php";
?>