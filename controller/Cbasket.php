<?php 
    require_once 'model/Mbasket.php';
    //PHP codes
    $basket = new Basket();
    switch($action)
    {
        case 'list':
            if(isset($_SESSION['user_id']))
            {
                $lists = $basket->list($_SESSION['user_id']);
            }
            else
                header("location:index.php?c=user&a=login");
        break;
        case 'details':
            if(isset($_SESSION['user_id']))
            {
                $lists = $basket->list($_SESSION['user_id']);
            }
            else
                header("location:index.php?c=user&a=login");
        break;
        case 'add':
            $count = $_POST['count']?$_POST['count']:1;
            $basket->basket_add($_SESSION['user_id'] , $_GET['proid'] , $count);
            header("location:index.php?c=index&a=index");
        break;
    }
    //PHP codes
    include_once "view/{$controller}/{$action}.php";
?>