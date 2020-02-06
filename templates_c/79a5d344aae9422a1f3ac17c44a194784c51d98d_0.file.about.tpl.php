<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-05 13:57:11
  from 'D:\xampp\htdocs\Greentea_Booking-master\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3abba7475d07_46264390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79a5d344aae9422a1f3ac17c44a194784c51d98d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-master\\templates\\about.tpl',
      1 => 1580893511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3abba7475d07_46264390 (Smarty_Internal_Template $_smarty_tpl) {
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

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/style.css">

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



    <header class="site-navbar site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">

          <div class="col-3">
            <div class="site-logo">
              <a href="switch.php" class="font-weight-bold">Approach</a>
            </div>
          </div>

          <div class="col-9  text-right">


            <span class="d-inline-block d-lg-none"><a href="#"
                class="text-primary site-menu-toggle js-menu-toggle py-5"><span
                  class="icon-menu h3 text-primary"></span></a></span>



            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="switch.php?pageid=1" class="nav-link">About</a></li>
                  <li><a href="switch.php?pageid=2" class="nav-link">Portfolio</a></li>
                  <li><a href="switch.php?pageid=3" class="nav-link">Services</a></li>
                  <li><a href="switch.php?pageid=4" class="nav-link">Blog</a></li>
                  <li><a href="switch.php?pageid=5" class="nav-link">Contact</a></li>
                   <?php if ($_SESSION['admin']) {?>
		                   <li><a href="user.php" class="nav-link">管理員</a></li>
                       <li><a href="logout.php" id="userout" class="nav-link">Logout</a></li>
	                <?php } else { ?>
		                   <li><a href="user.php" id="userin" class="nav-link">Login</a></li>
	                <?php }?>
              </ul>
            </nav>
          </div>


        </div>
      </div>

    </header>


    <div class="site-section-cover">
      <div class="container">
        <div class="row align-items-center text-center justify-content-center">
          <div class="col-lg-6">
            <h1 class="text-white mb-4">About Us</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit maxime nemo placeat dolor est.</p>

          </div>
        </div>
      </div>
    </div>


    <div class="site-section about-me">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/img_5.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-5 font-weight-bold">Who We Are</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem officia nesciunt quas, laudantium ex
              rem voluptas quod, distinctio eum tenetur. Placeat, quisquam, consequatur. Quam expedita neque nostrum
              iusto commodi minima!</p>
            <p>Omnis, aspernatur, incidunt cum quo, nisi harum ea earum suscipit delectus explicabo unde saepe commodi
              modi fugiat nihil sint nam. Ullam, esse totam mollitia molestias ipsum odio aperiam, officiis nesciunt.
            </p>


            <div class="social_29128 mt-5">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col">
            <h2 class="text-primary font-weight-bold">Our Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-29191">
              <span class="wrap-icon mb-4 d-block">
                <span class="icon-desktop_windows"></span>
              </span>
              <h3 class="mb-3">Interface Design</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatem reiciendis minus, a
                dolores.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-29191">
              <span class="wrap-icon mb-4 d-block">
                <span class="icon-explore"></span>
              </span>
              <h3 class="mb-3">Product Design</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatem reiciendis minus, a
                dolores.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-29191">
              <span class="wrap-icon mb-4 d-block">
                <span class="icon-layers"></span>
              </span>
              <h3 class="mb-3">Quality Results</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatem reiciendis minus, a
                dolores.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">

      <div class="container">
        <div class="row mb-5 text-center">
          <div class="col">
            <h2 class="text-primary font-weight-bold">Our Clients</h2>
          </div>
        </div>
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
              <a href="../index.php">Approach</a>
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
              Copyright &copy;
              <?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
> All rights reserved | This template is made
              with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>



  </div>
  <input type = "hidden" value ="login" value="inlog" id="login">
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery-migrate-3.0.0.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/owl.carousel.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.sticky.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.animateNumber.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.fancybox.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/isotope.pkgd.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/aos.js"><?php echo '</script'; ?>
>


  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/typed.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    !function ($) {
      var typed = new Typed('.typed-words', {
        strings: ["Business", " Startups", " Organization", " Company"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
      })
    };
  <?php echo '</script'; ?>
>


  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
