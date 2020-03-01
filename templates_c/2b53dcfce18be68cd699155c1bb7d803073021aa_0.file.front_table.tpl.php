<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-27 02:53:23
  from 'D:\xampp\htdocs\Greentea_Booking-0226xxxx\Greentea_Booking\templates\tpl\book\front_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e572113e00628_20572553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b53dcfce18be68cd699155c1bb7d803073021aa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0226xxxx\\Greentea_Booking\\templates\\tpl\\book\\front_table.tpl',
      1 => 1582768125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e572113e00628_20572553 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['bookpage']->value == 3) {?>
  <table class="table table-striped table-bordered table-hover table-sm">
      <thead>
      <tr>
          <th scope="col">姓名</th>
          <th scope="col">電話</th>
          <th scope="col">信箱</th>
          <th scope="col">區域</th>
          <th scope="col">入住日期</th>
          <th scope="col">退房日期</th>
          <th scope="col">人數</th>
          <th scope="col">種類</th>
          <th scope="col">備註</th>      
      </tr>
      </thead>
      <tbody>    
        <?php if ($_smarty_tpl->tpl_vars['row']->value) {?>
          <?php echo '<script'; ?>
>
          window.onload = function(){
              Swal.fire({
              //position: 'top-end',
              icon: 'success',
              title: "線上預訂成功",
              showConfirmButton: false,
              timer: 3000
              })
          }
        <?php echo '</script'; ?>
>
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
        <?php } else { ?>
          <tr>
            <td colspan=9>查無此資料</td>
          </tr>
        <?php }?>
    </tbody>
  </table>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['using']->value == 'yes') {?>
  <table class="table table-striped table-bordered table-hover table-sm">
      <thead>
      <tr>
          <th scope="col">姓名</th>
          <th scope="col">電話</th>
          <th scope="col">信箱</th>
          <th scope="col">區域</th>
          <th scope="col">入住日期</th>
          <th scope="col">退房日期</th>
          <th scope="col">人數</th>
          <th scope="col">種類</th>
          <th scope="col">備註</th>      
      </tr>
      </thead>
      <tbody>    
        <?php if ($_smarty_tpl->tpl_vars['row']->value) {?>         
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
        <?php } else { ?>
          <tr>
            <td colspan=9>查無此資料</td>
          </tr>
        <?php }?>
    </tbody>
  </table>

<?php }?>

  <?php }
}
