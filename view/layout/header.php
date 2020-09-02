<?php 
    ob_start(); 
    session_start();
    if(isset($_SESSION['user_id']))
    {
      $z = $db->query("SELECT * FROM basket WHERE user_id = '$_SESSION[user_id]'");
      $zz = $z->fetchAll(PDO::FETCH_OBJ);
    }
?>
<!DOCTYPE html>
<html dir="rtl">
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="public/default/image/favicon.png" rel="icon" />
<title>فروشگاه زانکو</title>
<meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="public/default/js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="public/default/js/bootstrap/css/bootstrap-rtl.min.css" />
<link rel="stylesheet" type="text/css" href="/public/default/css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="public/default/css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="public/default/css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="public/default/css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="public/default/css/responsive.css" />
<link rel="stylesheet" type="text/css" href="public/default/css/stylesheet-rtl.css" />
<link rel="stylesheet" type="text/css" href="public/default/css/responsive-rtl.css" />
<link rel="stylesheet" type="text/css" href="public/default/css/stylesheet-skin4.css" />
<link rel="stylesheet" type="text/css" href="public/default/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="public/default/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="public/default/revolution/css/navigation.css">
<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' type='text/css'>
<!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
  <div id="header" class="style2">
    <!-- Top Bar Start-->
    <nav id="top" class="htop">
      <div class="container">
        <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
          <div class="pull-left flip left-top">
            <div class="links">
              <ul>
                <li class="mobile"><i class="fa fa-phone"></i>09182853149</li>
                <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>zankonorii@gmail.com</a></li>
                <li class="wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی<b></b></a>
                  <div class="dropdown-menu custom_block">
                    <ul>
                      <li>
                        <table>
                          <tbody>
                            <tr>
                              <td><img alt="" src="public/default/image/banner/cms-block.jpg"></td>
                              <td><img alt="" src="public/default/image/banner/responsive.jpg"></td>
                            </tr>
                            <tr>
                              <td><h4>بلاک های محتوا</h4></td>
                              <td><h4>قالب واکنش گرا</h4></td>
                            </tr>
                            <tr>
                              <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                              <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                            </tr>
                            <tr>
                              <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                              <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div id="language" class="btn-group">
              <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> <img src="public/default/image/flags/gb.png" alt="انگلیسی" title="انگلیسی">انگلیسی <i class="fa fa-caret-down"></i></span></button>
              <ul class="dropdown-menu">
                <li>
                  <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="public/default/image/flags/gb.png" alt="انگلیسی" title="انگلیسی" /> انگلیسی</button>
                </li>
                <li>
                  <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="public/default/image/flags/ar.png" alt="عربی" title="عربی" /> عربی</button>
                </li>
              </ul>
            </div>
            <div id="currency" class="btn-group">
              <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> تومان <i class="fa fa-caret-down"></i></span></button>
              <ul class="dropdown-menu">
                <li>
                  <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                </li>
                <li>
                  <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                </li>
                <li>
                  <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ USD</button>
                </li>
              </ul>
            </div>
          </div>
          <div id="top-links" class="nav pull-right flip">
            <ul>
              <?php if(isset($_SESSION['user_name']) && isset($_SESSION['user_lastname'])): ?>
              <li><a href="index.php?c=index&a=index"><?php echo $_SESSION['user_name']." ".$_SESSION['user_lastname']; ?></a></li>
              <li><a href="index.php?c=user&a=logout">خروج</a></li>
              <?php else: ?>
              <li><a href="index.php?c=user&a=login">ورود</a></li>
              <li><a href="index.php?c=user&a=register">ثبت نام</a></li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Top Bar End-->
    <!-- Header Start-->
    <header class="header-row">
      <div class="container">
        <div class="table-container">
          <!-- Mini Cart Start-->
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-12 col-xs-12 inner">
            <div id="cart">
              <button type="button" data-toggle="dropdown" data-loading-text="بارگذاری ..." class="heading dropdown-toggle"> <span class="cart-icon pull-left flip"></span> <span id="cart-total">فروشگاه</span></button>
              <ul class="dropdown-menu">
                <li>
                  <table class="table">
                    <tbody>
                      <?php 
                      if(isset($zz)):
                        $c = 0;
                        $t = 0;
                        foreach($zz as $za):
                          $c++;
                          $z = $db->query("SELECT * FROM pro_tbl WHERE id = $za->procat_id");
                          $v = $z->fetch(PDO::FETCH_ASSOC);
                      ?>
                      <tr>
                        <td class="text-center"><a href="index.php?c=pro&a=details&id=<?php echo $za->procat_id; ?>"><img class="img-thumbnail" title="<?php $v['title']; ?>" alt="<?php echo $v['title']; ?>" src="<?php echo $v['img1']; ?>"></a></td>
                        <td class="text-left"><a href="index.php?c=pro&a=details&id=<?php echo $za->procat_id; ?>"><?php echo $v['title']; ?></a></td>
                        <td class="text-right">x <?php echo $za->count; ?></td>
                        <td class="text-right"><?php echo $v['price']*$za->count; $t +=$v['price']*$za->count;  ?> تومان</td>
                        <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                      </tr>
                      <?php 
                      endforeach;
                      endif; 
                      ?>
                    </tbody>
                  </table>
                </li>
                <li>
                  <div>
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td class="text-right"><strong>جمع کل</strong></td>
                          <td class="text-right"><?php echo $t; ?> تومان</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>کسر هدیه</strong></td>
                          <td class="text-right"><?php $h=400000; echo $h; ?> تومان</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>مالیات</strong></td>
                          <td class="text-right"><?php $m=100582; echo $m; ?> تومان</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>قابل پرداخت</strong></td>
                          <td class="text-right"><?php echo $t-$h+$m; ?> تومان</td>
                        </tr>
                      </tbody>
                    </table>
                    <p class="checkout"><a href="index.php?c=basket&a=list" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;<a href="index.php?c=basket&a=details" class="btn btn-primary"><i class="fa fa-share"></i> تسویه حساب</a></p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- Mini Cart End-->
          <!-- Logo Start -->
          <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div id="logo"><a href="index.php"><img class="img-responsive" src="public/default/image/logo.png" title="MarketShop" alt="MarketShop" /></a></div>
          </div>
          <!-- Logo End -->
          <!-- جستجو Start-->
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-12 col-xs-12 inner">
            <div id="search" class="input-group">
              <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
              <button type="button" class="button-search"><i class="fa fa-search"></i></button>
            </div>
          </div>
          <!-- جستجو End-->
        </div>
      </div>
    </header>
    <!-- Header End-->
    <!-- Main Menu Start-->
    <nav id="menu" class="navbar">
      <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
      <div class="container">
        <div class="collapse navbar-collapse navbar-ex1-collapse">

          <ul class="nav navbar-nav">
            <li><a class="home_link" title="خانه" href="index.php">خانه</a></li>
            <?php foreach($mainlists as $value): ?>
              
              <li class="dropdown sub"><a href="#"><?php echo $value->title; ?></a>
              <span class="submore"></span><div class="dropdown-menu" style="display: none;">
                
                  <?php
                     $submenus = $class->procat_list($value->id);
                     if($submenus):
                  ?>
                      <ul>
                  <?php
                      foreach($submenus as $submenu):
                  ?>
                  <li> <a href="#"><?php echo $submenu->title; ?></a></li>
                  <?php
                      endforeach;
                  ?>
                      </ul>
                  <?php
                    endif;
                  ?>
                
              </div>
            </li>

            <?php endforeach; ?>
            <!-- <li class="mega-menu dropdown"><a href="category.html">آقایان</a>
              <div class="dropdown-menu">
                <div class="column col-lg-2 col-md-3"><a href="category.html">کفش</a>
                  <div>
                    <ul>
                      <li><a href="category.html">کفش راحتی</a></li>
                      <li><a href="category.html">کفش رسمی</a></li>
                      <li><a href="category.html">صندل و دمپایی</a></li>
                      <li><a href="category.html">کتانی</a></li>
                      <li><a href="category.html">کفش ورزشی</a></li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"><a href="category.html">البسه</a>
                  <div>
                    <ul>
                      <li><a href="category.html">راحتی</a></li>
                      <li><a href="category.html">جین</a></li>
                      <li><a href="category.html">تی شرت</a></li>
                      <li><a href="category.html">پیراهن رسمی</a></li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"><a href="category.html">کیف و کمربند</a>
                  <div>
                    <ul>
                      <li><a href="category.html">کیف دوشی</a></li>
                      <li><a href="category.html">کیف دستی</a></li>
                      <li><a href="category.html">کیف پول و کمربند</a></li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"><a href="category.html">ساعت</a>
                  <div>
                    <ul>
                      <li><a href="category.html">تایمکس</a></li>
                      <li><a href="category.html">تایتان</a></li>
                      <li><a href="category.html">فسترک</a></li>
                      <li><a href="category.html">لوازم</a></li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"><a href="category.html">بازی</a>
                  <div>
                    <ul>
                      <li><a href="category.html">اسباب بازی</a></li>
                      <li><a href="category.html">پازل</a></li>
                      <li><a href="category.html">سرگرمی</a></li>
                      <li><a href="category.html">متنوع</a></li>
                      <li><a href="category.html">سلامت و امنیت</a></li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"><a href="category.html">لوازم</a>
                  <div>
                    <ul>
                      <li><a href="category.html">زیردسته های جدید</a></li>
                      <li><a href="category.html">زیردسته ها</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li> -->


            <!-- <li class="dropdown information-link"><a>برگه ها</a>
              <div class="dropdown-menu">
                <ul>
                  <li><a href="login.html">ورود</a></li>
                  <li><a href="register.html">ثبت نام</a></li>
                  <li><a href="category.html">دسته بندی (شبکه/لیست)</a></li>
                  <li><a href="product.html">محصولات</a></li>
                  <li><a href="cart.html">سبد خرید</a></li>
                  <li><a href="checkout.html">تسویه حساب</a></li>
                  <li><a href="compare.html">مقایسه</a></li>
                  <li><a href="wishlist.html">لیست آرزو</a></li>
                  <li><a href="search.html">جستجو</a></li>
                </ul>
                <ul>
                  <li><a href="about-us.html">درباره ما</a></li>
                  <li><a href="404.html">404</a></li>
                  <li><a href="elements.html">عناصر</a></li>
                  <li><a href="faq.html">سوالات متداول</a></li>
                  <li><a href="sitemap.html">نقشه سایت</a></li>
                  <li><a href="contact-us.html">تماس با ما</a></li>
                </ul>
              </div>
            </li>
             -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- Main Menu End-->
  </div>