<?php 
    require_once 'model/Mpro.php';
    //PHP code
    $ob = new ProShow();

    switch ($action)
    {
        case 'details':
            $pro = $ob->show_pro($_GET['id']);
        break;
        case 'list':
            $prol = $ob->pro_select($_GET['id']);
            $lists = $ob->pro_list();
            $procatList = $ob->procats("0");
        break;
    }
    //PHP code
    include_once "view/{$controller}/{$action}.php";
?>