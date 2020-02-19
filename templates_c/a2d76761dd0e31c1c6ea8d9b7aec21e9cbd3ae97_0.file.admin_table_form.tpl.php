<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-18 08:49:23
  from 'D:\xampp\htdocs\Greentea_Booking-0218\templates\tpl\admin_table_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4b970339e403_10775862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2d76761dd0e31c1c6ea8d9b7aec21e9cbd3ae97' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0218\\templates\\tpl\\admin_table_form.tpl',
      1 => 1581752793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4b970339e403_10775862 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['op']->value == 'op_list') {?>
<table class="table table-striped  table-bordered table-hover table-sm">
  <thead>
    <tr>
      <th scope="col">帳號</th>
      <th scope="col">姓名</th>
      <th scope="col">電話</th>
      <th scope="col">Email</th>
      <th scope="col">狀態</th>
      <th scope="col">功能</th>
    </tr>
  </thead>
  <tbody>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
      </tr>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
<?php }
}
}
