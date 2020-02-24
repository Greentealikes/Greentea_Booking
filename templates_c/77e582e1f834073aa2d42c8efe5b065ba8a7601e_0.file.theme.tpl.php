<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-21 02:28:41
  from 'D:\xampp\htdocs\Greentea_Booking-0220\templates\theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4f32498edf74_91195402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77e582e1f834073aa2d42c8efe5b065ba8a7601e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0220\\templates\\theme.tpl',
      1 => 1582179467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:tpl/index/index_fom.tpl' => 1,
    'file:tpl/about/about_fom.tpl' => 1,
    'file:book_fom.tpl' => 1,
    'file:tpl/services/services_fom.tpl' => 1,
    'file:tpl/blog/blog_fom.tpl' => 1,
    'file:tpl/contact/contact_fom.tpl' => 1,
    'file:tpl/admin_form.tpl' => 1,
    'file:tpl/reg_form.tpl' => 1,
    'file:tpl/login_form.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:tpl/head_js.tpl' => 1,
  ),
),false)) {
function content_5e4f32498edf74_91195402 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

    <!--  導覽頁面&css  -->
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <!-- 點選導覽頁面切換內容 -->
    <?php if ($_smarty_tpl->tpl_vars['pageid']->value == 0) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:tpl/index/index_fom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['pageid']->value == 1) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:tpl/about/about_fom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['pageid']->value == 2) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:book_fom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['pageid']->value == 3) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:tpl/services/services_fom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['pageid']->value == 4) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:tpl/blog/blog_fom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['pageid']->value == 5) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:tpl/contact/contact_fom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['pageid']->value == 6) {?>

      <?php if ($_SESSION['user']['kind'] === 1) {?>          
        <?php $_smarty_tpl->_subTemplateRender("file:tpl/admin_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['op']->value == 'reg_form') {?>
          <?php $_smarty_tpl->_subTemplateRender("file:tpl/reg_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>     
        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender("file:tpl/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
      <?php }?>
    <?php }?>


  <!-- 頁尾畫面 -->
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

  </body>
</html> 

<?php $_smarty_tpl->_subTemplateRender("file:tpl/head_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  






<?php }
}