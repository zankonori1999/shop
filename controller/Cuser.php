<?php 
    require_once 'model/Muser.php';
    //PHP codes
    $classUser = new User();
    
    switch($action)
    {
        case 'register':
            if(isset($_POST['Enter']))
            {
                $data = $_POST['data'];
                if($data['password'] != $data['confirm'])
                    header("location:index.php?c=user&a=register&E=notE");
                
                $data['vc'] = uniqid();
                $classUser->register($data);
                mail($data['email'] , 'verification' , '<a href="shop.ir/register.php?vc= $data[vc]" >Click me</a>');
            }
        break;
        case 'login':
            if(isset($_POST['Enter']))
            {
                $classUser->login($_POST['data']);
            }
        break;
        case 'logout':
            $classUser->logout();
            header("location:index.php?c=user&a=login");
        break;
    }
    //PHP codes
    include_once "view/{$controller}/{$action}.php";
?>