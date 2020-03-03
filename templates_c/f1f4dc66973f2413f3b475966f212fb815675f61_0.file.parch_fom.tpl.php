<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-03 07:42:50
  from 'D:\xampp\htdocs\booking-web_v0301\templates\parch_fom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5dfc6ac2c007_24468459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1f4dc66973f2413f3b475966f212fb815675f61' => 
    array (
      0 => 'D:\\xampp\\htdocs\\booking-web_v0301\\templates\\parch_fom.tpl',
      1 => 1583217689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/head_js.tpl' => 1,
    'file:tpl/parch/parch_wreawool.tpl' => 1,
    'file:tpl/parch/parch_gourmets.tpl' => 1,
    'file:tpl/parch/parch_contact.tpl' => 1,
    'file:tpl/parch/parch_index.tpl' => 1,
  ),
),false)) {
function content_5e5dfc6ac2c007_24468459 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
<title>Creative - Start Bootstrap Theme</title>
<!-- Font Awesome Icons -->
<link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Plugin CSS -->
<link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

<link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/creative.min.css" rel="stylesheet">

<?php $_smarty_tpl->_subTemplateRender("file:tpl/head_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>

<?php if ($_smarty_tpl->tpl_vars['op']->value == "wreawool") {?> 
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/parch/parch_wreawool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "gourmets") {?> 
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/parch/parch_gourmets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "contact_form") {?> 
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/parch/parch_contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

<?php } else { ?> 
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/parch/parch_index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?> 







 
<?php }
}
