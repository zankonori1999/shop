<?php 
    if(isset($_POST['Enter']))
    {
      $class->login($_POST['data']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="shop, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../public/panel/img/favicon.html">

    <title>admin login</title>

    <!-- Bootstrap core CSS -->
    <link href="../public/panel/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/panel/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../public/panel/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../public/panel/css/style.css" rel="stylesheet">
    <link href="../public/panel/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">
 	 <img src="../public/panel/img/logo1.png" width="150" height="150" alt="" class="academyitLogo"/> 
      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading">همین حالا وارد شوید</h2>
        <div class="login-wrap">
            <input type="email" class="form-control" placeholder="ایمیل" autofocus name="data[email]">
            <input type="password" class="form-control" placeholder="کلمه عبور" name="data[password]">
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> مرا به خاطر بسپار
                <span class="pull-right"> <a href="#"> کلمه عبور را فراموش کرده اید؟</a></span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit" name="Enter">ورود</button>

        </div>

      </form>

    </div>


  </body>
</html>
