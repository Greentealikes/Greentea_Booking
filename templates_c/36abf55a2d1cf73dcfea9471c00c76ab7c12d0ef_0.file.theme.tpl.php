<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-14 09:48:13
  from 'D:\xampp\htdocs\Greentea_Booking-master\templates\theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e465ecd8ca1a1_85622643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36abf55a2d1cf73dcfea9471c00c76ab7c12d0ef' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-master\\templates\\theme.tpl',
      1 => 1581668247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index_fom.tpl' => 1,
    'file:about_fom.tpl' => 1,
    'file:book_fom.tpl' => 1,
    'file:services_fom.tpl' => 1,
    'file:blog_fom.tpl' => 1,
    'file:contact_fom.tpl' => 1,
    'file:user.tpl' => 1,
    'file:tpl/head_js.tpl' => 1,
  ),
),false)) {
function content_5e465ecd8ca1a1_85622643 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
  <title>Approach &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,900|Source+Serif+Pro&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/aos.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/style.css">
  
  <link rel="stylesheet"  type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/bookstyle.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div class="site-wrap" id="home-section">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <!-- 導覽頁面 -->
    <div class = "header fixed-top">
      <header class="site-navbar site-navbar-target" role="banner">
        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="col-3">
                <div class="site-logo">
                    <a href="index.php" class="font-weight-bold">Approach</a>
                </div>
            </div>

            <div class="col-9  text-right">
              <span class="d-inline-block d-lg-none">
                  <a href="#" class="text-primary site-menu-toggle js-menu-toggle py-5">
                      <span class="icon-menu h3 text-primary">
                      </span>
                  </a>
              </span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="nav_active"><a href="switch.php?pageid=1" class="nav-link">關於我們</a></li>
                  <li><a href="switch.php?pageid=2&bookpage=1" class="nav-link">線上預訂</a></li>
                  <li><a href="switch.php?pageid=3" class="nav-link">服務</a></li>
                  <li><a href="switch.php?pageid=4" class="nav-link">周邊活動</a></li>
                  <li><a href="switch.php?pageid=5" class="nav-link">聯繫我們</a></li>
      
              <?php if ($_SESSION['admin']) {?>
                  <li><a href="user.php" class="nav-link">管理員</a></li>
                  <li><a href="user.php?op=logout" class="nav-link">Logout</a></li>                     
              <?php } else { ?>
                  <li><a href="user.php?pageid=6" id="userin" class="nav-link">Login</a></li>                     
              <?php }?>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
    </div>

    <!-- 點選導覽頁面切換內容 -->
    <?php if ($_smarty_tpl->tpl_vars['pageid']->value == 0) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:index_fom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['pageid']->value == 1) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:about_fom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['pageid']->value == 2) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:book_fom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['pageid']->value == 3) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:services_fom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['pageid']->value == 4) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:blog_fom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['pageid']->value == 5) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:contact_fom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['pageid']->value == 6) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <!-- 頁尾畫面 -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/client_google.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/client_invision.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/client_nike.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/client_microsoft.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
      
    <div class="footer site-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="site-logo-footer">
              <a href="index.html">Approach</a>
            </div> 
          </div>
          <div class="col-md-8 ml-auto">
            <div class="row">
              <div class="col-md-4 ml-auto">
                <ul class="list-unstyled links">
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">hello@mydomain.com</a></li>
                  <li><a href="#">+1 829 2293 382</a></li>
                  <li><a href="#">Support</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-unstyled links">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">About Us</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-unstyled links">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">About Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-4 text-center">
        <div class="col">
          <a href="#"><span class="m-2 icon-facebook"></span></a>
          <a href="#"><span class="m-2 icon-twitter"></span></a>
          <a href="#"><span class="m-2 icon-linkedin"></span></a>
          <a href="#"><span class="m-2 icon-instagram"></span></a>
          <a href="#"><span class="m-2 icon-skype"></span></a>
        </div>
      </div>
      <div class="row mt-5 justify-content-center">
        <div class="col-md-7 text-center">
          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </div>

  </body>
</html> 

<?php $_smarty_tpl->_subTemplateRender("file:tpl/head_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  






<?php }
}
