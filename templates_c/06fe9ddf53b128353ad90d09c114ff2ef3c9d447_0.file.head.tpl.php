<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-18 08:41:50
  from 'D:\xampp\htdocs\Greentea_Booking-0218\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4b953e91ae70_17978982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06fe9ddf53b128353ad90d09c114ff2ef3c9d447' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0218\\templates\\head.tpl',
      1 => 1582006987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4b953e91ae70_17978982 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                        <li class="nav_active"><a href="page_sw.php?pageid=1" class="nav-link">關於我們</a></li>
                        <li><a href="page_sw.php?pageid=2&bookpage=1" class="nav-link">線上預訂</a></li>
                        <li><a href="page_sw.php?pageid=3" class="nav-link">服務</a></li>
                        <li><a href="page_sw.php?pageid=4" class="nav-link">周邊活動</a></li>
                        <li><a href="page_sw.php?pageid=5" class="nav-link">聯繫我們</a></li>
            
                    <?php if ($_SESSION['admin']) {?>
                        <li><a href="user.php" class="nav-link">管理員</a></li>
                        <li><a href="page_sw.php?op=logout&pageid=6" class="nav-link">Logout</a></li>                     
                    <?php } else { ?>
                        <li><a href="page_sw.php?op=op_list&pageid=6" id="userin" class="nav-link">Login</a></li>                     
                    <?php }?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div><?php }
}
