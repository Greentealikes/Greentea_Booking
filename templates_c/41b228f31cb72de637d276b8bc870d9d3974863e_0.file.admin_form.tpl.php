<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-15 07:16:38
  from 'D:\xampp\htdocs\Greentea_Booking-master\templates\tpl\admin_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e478cc66bbb35_22174638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41b228f31cb72de637d276b8bc870d9d3974863e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-master\\templates\\tpl\\admin_form.tpl',
      1 => 1581745979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e478cc66bbb35_22174638 (Smarty_Internal_Template $_smarty_tpl) {
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
   
</head>

<body>
    <h1 class="text-center">Greentea 後台</h1>
        <div class="container">
	        <div class="row">
		        <div class="col-sm-9">

		        </div>
		    <div class="col-sm-3">
            
                <div class="card text-white bg-secondary mb-3" style="width: 18rem;">
                    <div class="card-header ">管理員</div>
                <div class="list-group">
                    <a class="list-group-item list-group-item-action list-group-item-dark" href="index.php" id="Back_home">首頁</a>         
                    <a class="list-group-item list-group-item-action list-group-item-dark" href="switch.php?op=logout&pageid=6" id="user_out">登出</a>
                    <a class="list-group-item list-group-item-action list-group-item-dark" 
                    href="http://127.0.0.1/phpmyadmin/index.php" target="_blank">資料庫管理</a>
		        </div>

		    </div>
	    </div>
    </div>     
</body>

</html><?php }
}
