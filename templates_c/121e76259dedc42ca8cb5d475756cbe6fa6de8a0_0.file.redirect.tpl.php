<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-13 06:36:58
  from 'D:\xampp\htdocs\Greentea_Booking-master\templates\tpl\redirect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e44e07a100dd8_67195850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '121e76259dedc42ca8cb5d475756cbe6fa6de8a0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-master\\templates\\tpl\\redirect.tpl',
      1 => 1581572216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e44e07a100dd8_67195850 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.css"> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  window.onload = function(){
     Swal.fire({
      //position: 'top-end',
      icon: 'success',
      title: '轉頁訊息',
      showConfirmButton: false,
      timer: 3000
    })
  }
<?php echo '</script'; ?>
><?php }
}
