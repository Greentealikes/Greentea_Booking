<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-05 09:54:45
  from 'D:\xampp\htdocs\php_file\web1\templates\tpl\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3a82d5e54c88_21639381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a0f18193fa4f970a779e9f86e59469956f83416' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_file\\web1\\templates\\tpl\\admin.tpl',
      1 => 1580892869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3a82d5e54c88_21639381 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">管理員</div>
                    <ul class= "list-group list-group-flush">
                        <a href="index.php">
                            <li class="list-group-item">首頁</li>
                        </a>
                        <a href="#">
                            <li class="list-group-item">使用者資料</li>
                        </a>                       
                        <a  href="user.php?op=logout" id="userout">
                            <li class="list-group-item">登出</li>
                           
                        </a>
                    </ul>
		        </div>
		<div class="col-sm-3">
			
		</div>
	</div>
</div>
</body>

</html><?php }
}
