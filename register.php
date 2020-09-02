<?php 
    require_once 'public/config.php';
    $vc = $_GET['vc'];
    $db->query("UPDATE user_tbl SET status = '1' , vc = '' WHERE vc = '$vc'");
?>