<?php 
ob_start();
session_start();
include_once '../public/config.php';

if(!isset($_SESSION['login'])){
  $action = 'login';
    include_once 'controller/Cadmin.php';
}else{
  if(isset($_GET['logout']))
  {
    $action = 'logout';
    include_once 'controller/Cadmin.php';
  }
  $controller =@$_GET['c']?$_GET['c']:'index';
  $action =@$_GET['a']?$_GET['a']:'index';

  include_once 'view/layout/heder.php';
  //contant
  include_once "controller/C{$controller}.php";
  //contant
  include_once 'view/layout/footer.php'; 
}
?>