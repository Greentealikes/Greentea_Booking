<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-21 02:28:45
  from 'D:\xampp\htdocs\Greentea_Booking-0220\templates\book_fom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4f324d57e867_88889444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f97b1a687e3352c722e48b7b8bd0a99789420b08' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0220\\templates\\book_fom.tpl',
      1 => 1582164971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/book/bookpg2_form.tpl' => 1,
    'file:tpl/book/bookpg3_form.tpl' => 1,
    'file:tpl/book/bookpg4_form.tpl' => 1,
    'file:tpl/book/bookpg1_form.tpl' => 1,
  ),
),false)) {
function content_5e4f324d57e867_88889444 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class = "logoimage" style="margin-top:50px;">     
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn01.jpg" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn02.jpg" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn03.jpg" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn04.jpg" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn05.jpg" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn06.jpg" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn07.jpg" class="d-block w-100" alt="...">
  </div>
</div>    




<div class="Marquee-alert">
  <marquee behavior="behavior" width="100%" loop="2">
  歡迎來客訪問，如要線上預訂，可線上填單或是直接電話來電09-xxx-xx-xxx
  </marquee>
</div> 

<?php if ($_smarty_tpl->tpl_vars['bookpage']->value == 2) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/book/bookpg2_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['bookpage']->value == 3) {?>  
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/book/bookpg3_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php } elseif ($_smarty_tpl->tpl_vars['bookpage']->value == 4) {?>  
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/book/bookpg4_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php } else { ?>
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/book/bookpg1_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
<?php }?>








 

<?php }
}