<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-20 10:20:12
  from 'D:\xampp\htdocs\Greentea_Booking-0218\templates\tpl\book\front_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4e4f4c60f1f4_63105706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6a5100a6a079017b6ee26f60302dfd095429bca' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0218\\templates\\tpl\\book\\front_table.tpl',
      1 => 1582190321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e4f4c60f1f4_63105706 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table table-striped table-bordered table-hover table-sm">
    <thead>
    <tr>
        <th scope="col">Username</th>
        <th scope="col">Userphone</th>
        <th scope="col">Useremail</th>
        <th scope="col">Userarea</th>
        <th scope="col">Datein</th>
        <th scope="col">Dateout</th>
        <th scope="col">Usernum</th>
        <th scope="col">Usertype</th>
        <th scope="col">Useradd</th>      
    </tr>
    </thead>
    <tbody>    
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usphone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usemail'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usarea'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['datein'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dateout'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usnum'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ustype'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usadd'];?>
</td>
        </tr>
      <?php
}
} else {
?>
        <tr>
          <td colspan=9>查無此資料</td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table><?php }
}
