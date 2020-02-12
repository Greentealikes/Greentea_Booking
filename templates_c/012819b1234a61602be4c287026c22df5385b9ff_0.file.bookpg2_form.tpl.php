<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-12 02:31:51
  from 'D:\xampp\htdocs\Greentea_Booking-master\templates\tpl\bookpg2_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e435587cd7bb8_17271251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '012819b1234a61602be4c287026c22df5385b9ff' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-master\\templates\\tpl\\bookpg2_form.tpl',
      1 => 1581471110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e435587cd7bb8_17271251 (Smarty_Internal_Template $_smarty_tpl) {
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
                              <li class="nav_active"><a href="switch.php?pageid=1" class="nav-link">About</a></li>
                              <li><a href="switch.php?pageid=2" class="nav-link">Portfolio</a></li>
                              <li><a href="switch.php?pageid=3" class="nav-link">Services</a></li>
                              <li><a href="switch.php?pageid=4" class="nav-link">Blog</a></li>
                              <li><a href="switch.php?pageid=5" class="nav-link">Contact</a></li>
                  
                              <?php if ($_SESSION['admin']) {?>
		                              <li><a href="user.php" class="nav-link">管理員</a></li>
                                  <li><a href="user.php?op=logout" class="nav-link">Logout</a></li>                     
	                            <?php } else { ?>
		                              <li><a href="user.php" id="userin" class="nav-link">Login</a></li>                     
	                            <?php }?>
                            </ul>
                          </nav>
                      </div>
                  </div>
              </div>
          </header>

          <div class = "logoimage">               
              <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/logoimg.jpg" alt="Image" class="img-fluid"></a>
          </div>    

          <div class="Marquee-alert">
                <marquee behavior="behavior" width="100%" loop="2">
                歡迎來客訪問，如要線上預訂，可線上填單或是直接電話來電09-xxx-xx-xxx
                </marquee>
          </div>   

          <div class="site-section">
              <div class="row">
                  <div class = "col-3">   
                      <div class="list-group" id="list-tab" role="tablist">
                          <a href = "switch.php?pageid=2&bookpage=1">
                            <li class="list-group-item "><stong>線上系統說明</stong></li>
                          </a>
                          <a href = "switch.php?pageid=2&bookpage=2">
                            <li class="list-group-item btn-hold"><stong>填寫表單</stong></li>
                          </a>
                          <a href = "switch.php?pageid=2&bookpage=3">
                            <li class="list-group-item"><stong>完成表單</stong></li>
                          </a>
                          <a href = "switch.php?pageid=2&bookpage=4">
                            <li class="list-group-item"><stong>查詢表單</stong></li>
                          </a>
                      </div>
                   </div>  

                  <div class = "col-9">   
                      <form action="userbooking.php" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
                          <div class="book-container alert alert-warning ">
                            <div class = "title-font">  
                                <div class="col-sm-12">填寫表單</div>
                                <div class="col-sm-12">
                                <h4>心在哪裡，就在哪裡－ 民宿等你來發掘！</h4>
                                </div>
                            </div>
                            
                            <div class="row container book-body"> 
                                <div class="col-sm-6">
                                  <div class="form-group">
                                      <label>姓名<span class="text-danger">*</span></label>
                                      <input type="text" class="form-control" id="usname" name="usname">
                                  </div>
                                </div>

                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label>電話<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="usphone" name="usphone">
                                  </div>
                                </div>  

                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label>電子郵件 <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="usemail" name="usemail">
                                  </div>
                                </div>  

                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label>地區 <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="usarea" name="usarea">
                                  </div>
                                </div> 
                                        
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label>入住時間<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="datein" name="datein">
                                  </div>
                                </div>  
                                         
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label>退房時間<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="dateout" name="dateout">
                                  </div>
                                </div>   
                                            
                                <div class="col-sm-6">
                                  <label>人數<span class="text-danger">*</span></label>
                                  <div class="form-group">   
                                    <select class="form-control" name="usnum" id="usnum">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select>
                                  </div>                                 
                                </div> 
                                  
                                <div class="col-sm-6">
                                  <label>房型<span class="text-danger">*</span"></label>
                                  <div class="form-group">   
                                    <select class="form-control" name="ustype" id="ustype">
                                      <option>單人套房-(1人)</option>
                                      <option>經典雙人-(2人)</option>
                                      <option>古典雙人-(2人)</option>
                                      <option>家庭四人-(4人)</option>
                                      <option>旅遊-(10人以上)</option>
                                    </select>
                                  </div>
                                </div> 

                                <div class="col-sm-12">
                                  <div class="form-group">
                                    <label class="control-label">備註<span class="text-danger">*</span"></label>
                                    <textarea class="form-control" rows="4" id="usadd" name="usadd"></textarea>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div id = 'foo'></div>
                                </div>

                                <div class="pb-20 amplif-gap">
                                  <input type="hidden" name="bookbegin" value="visit" id="bookbegin">
                                  <button type="submit" class="btn btn-primary ">確認表單</button>
                                </div>
                                
                                <div class="pb-20 amplif-gap">
                                  <button type="reset" class="btn btn-danger">清除表單</button>
                                </div>
                            </div>
                            
                      </form>
                  </div>
              </div>
          </div>
      <div class="footer site-section bg-light">
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

      <div class="site-section bg-light">
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
