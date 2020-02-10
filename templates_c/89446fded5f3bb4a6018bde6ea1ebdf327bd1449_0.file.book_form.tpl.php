<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-10 02:03:23
  from 'D:\xampp\htdocs\Greentea_Booking-master\templates\book_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e40abdbc958c8_41244310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89446fded5f3bb4a6018bde6ea1ebdf327bd1449' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-master\\templates\\book_form.tpl',
      1 => 1581197782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/bookpg1_form.tpl' => 2,
    'file:tpl/bookpg2_form.tpl' => 1,
    'file:tpl/bookpg3_form.tpl' => 1,
    'file:tpl/bookpg4_form.tpl' => 1,
  ),
),false)) {
function content_5e40abdbc958c8_41244310 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php if ($_SESSION['bookpage'] == 1) {?>
		    <?php $_smarty_tpl->_subTemplateRender("file:tpl/bookpg1_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	    <?php } elseif ($_SESSION['bookpage'] == 2) {?>
		    <?php $_smarty_tpl->_subTemplateRender("file:tpl/bookpg2_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_SESSION['bookpage'] == 3) {?>  
            <?php $_smarty_tpl->_subTemplateRender("file:tpl/bookpg3_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
        <?php } elseif ($_SESSION['bookpage'] == 4) {?>  
            <?php $_smarty_tpl->_subTemplateRender("file:tpl/bookpg4_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("file:tpl/bookpg1_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>    
	    <?php }?>

  </body>
</html><?php }
}
