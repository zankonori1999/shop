<?php 
    include_once 'public/config.php';
    include_once 'controller/Cprocat.php';
    include_once 'view/layout/header.php';
    //contact
    $controller =@$_GET['c']?$_GET['c']:'index';
    $action = @$_GET['a']?$_GET['a']:'index';

    if(file_exists("controller/C{$controller}.php"))
    {
        include_once "controller/C{$controller}.php";
    }
    include_once 'view/layout/footer.php';
?>