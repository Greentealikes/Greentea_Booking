<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 08:03:06
  from 'D:\xampp\htdocs\booking-web_v0301\templates\book_fom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5cafaa27aef2_26428367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46b744b2087fe3b9c5dc8a9ab8d3c27451f64b7b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\booking-web_v0301\\templates\\book_fom.tpl',
      1 => 1583132583,
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
function content_5e5cafaa27aef2_26428367 (Smarty_Internal_Template $_smarty_tpl) {
?><div class = "logoimage" >     
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner ">
      <div class="carousel-item active branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn01.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn02.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn03.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn04.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn05.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn06.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/bn07.jpg" class="d-block w-100 " alt="...">
      </div>
    </div>
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