<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-27 06:54:02
  from 'D:\xampp\htdocs\Greentea_Booking-0227\templates\tpl\book\front_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e57597a4e0033_81828352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6230c3f36086e4c84c411ff8e5e1574f0f1b11b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0227\\templates\\tpl\\book\\front_table.tpl',
      1 => 1582782788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e57597a4e0033_81828352 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['bookpage']->value == 3) {?>
  <table class="table table-striped table-bordered table-hover table-sm">
      <thead>
      <tr>
          <th scope="col">姓名</th>
          <th scope="col">電話</th>
          <th scope="col">信箱</th>
          <th scope="col">區域</th>
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
          </tr>
        <?php } else { ?>
          <tr>
            <td colspan=4>查無此資料</td>
          </tr>
        <?php }?>
    </tbody>
    <thead>     
      <tr> 
        <th scope="col">入住日期</th>
        <th scope="col">退房日期</th>
        <th scope="col">人數</th>
        <th scope="col">種類</th>
      </tr>      
    </thead>    
    <tbody>   
      <?php if ($_smarty_tpl->tpl_vars['row']->value) {?> 
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['datein'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dateout'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usnum'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ustype'];?>
</td>
        </tr>
        <?php } else { ?>
        <tr>
          <td colspan=4>查無此資料</td>
        </tr>
      <?php }?>      
    </tbody>

    <thead>
      <tr> 
        <th scope="col" colspan=4>備註</th>  
      </tr> 
    </thead>    
    <tbody>   
      <?php if ($_smarty_tpl->tpl_vars['row']->value) {?> 
        <tr>
          <?php if ($_smarty_tpl->tpl_vars['row']->value['usadd'] !== '') {?>
            <?php echo $_smarty_tpl->tpl_vars['row']->value['usadd'];?>

          <?php } else { ?>
            無備註
          <?php }?>
        </tr>
      <?php } else { ?>
        <tr>
          <td colspan=4>查無此資料</td>
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
          </tr>
        <?php } else { ?>
          <tr>
            <td colspan=4>查無此資料</td>
          </tr>
        <?php }?>
    </tbody>
    <thead>     
      <tr> 
        <th scope="col">入住日期</th>
        <th scope="col">退房日期</th>
        <th scope="col">人數</th>
        <th scope="col">種類</th>
      </tr>      
    </thead>    
    <tbody>   
      <?php if ($_smarty_tpl->tpl_vars['row']->value) {?> 
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['datein'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dateout'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usnum'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ustype'];?>
</td>
        </tr>
        <?php } else { ?>
        <tr>
          <td colspan=4>查無此資料</td>
        </tr>
      <?php }?>      
    </tbody>

    <thead>
      <tr> 
        <th scope="col" colspan=4>備註</th>  
      </tr> 
    </thead>    
    <tbody>   
      <?php if ($_smarty_tpl->tpl_vars['row']->value) {?> 
        <tr>
          <td colspan=4>
          <?php if ($_smarty_tpl->tpl_vars['row']->value['usadd'] !== '') {?>
            <?php echo $_smarty_tpl->tpl_vars['row']->value['usadd'];?>

          <?php } else { ?>
            無備註
          <?php }?>
          </td>
        </tr>
      <?php } else { ?>
        <tr>
          <td colspan=4>查無此資料</td>
        </tr>
      <?php }?> 
           
    </tbody>
  </table>

<?php }?>

  <?php }
}
