<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-01 16:19:22
  from 'D:\xampp\htdocs\web1\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3596fa325454_44293571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63b606f89bfa458635fb9fc01ab5305bfa1927ed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web1\\templates\\user.tpl',
      1 => 1580568637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3596fa325454_44293571 (Smarty_Internal_Template $_smarty_tpl) {
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
  <body>
    <style>
        .form-signin {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: 0 auto;
        }      
    </style>
    <?php if (!$_SESSION['admin']) {?>
        <div class="container mt-5">
            <form class="form-signin" action="user.php" method="post">
                <h1 class="h3 mb-3 font-weight-normal">會員登入</h1>
                <div class="mb-3">
                <label for="name" class="sr-only">帳號</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="請輸入帳號"  required>
                </div>
                <div class="mb-3">
                <label for="pass" class="sr-only">密碼</label>
                <input type="password" name="pass" id="pass" class="form-control" placeholder="請輸入密碼" required>
                </div>
             
                <div class="checkbox mb-3">
                <label>
                    <input type="hidden" name="op" value="login" id="op">
                    <input type="checkbox" name="remember" id="remember"> 記住我
                </label>
                     
                </div>               
                <button class="btn btn-lg btn-primary btn-block" type="submit">會員登入</button>
                <div>
                    您還沒還沒註冊嗎？請 <a href="#">點選此處註冊您的新帳號</a>。
                </div>
            </form>
        </div>
   <?php }?>
 
  </body>
</html><?php }
}
