<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-29 15:10:07
  from 'D:\xampp\htdocs\Greentea_Booking-teaing_v0227\templates\tpl\admin_prods_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5a70bf540869_80206682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62cd55f76a3f631b0270379b8b7f29ac7895ba0b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-teaing_v0227\\templates\\tpl\\admin_prods_form.tpl',
      1 => 1582982213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5a70bf540869_80206682 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['book']->value == "prods_update_form") {?>
 <div class="container mt-5" >
    <h1 class="text-center">房型資料表</h1>
    <form action="userprods.php" method="post" id="bookreg" class="mb-20" enctype="multipart/form-data">
      <div class="row">         
               
        <div class="col-sm-4">
          <div class="form-group">
          <label>名稱</label>
          <input type="text" class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" >
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
          <label>分類</label>
          <input type="text" class="form-control" name="kind_sn" id="kind_sn" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['kind_sn'];?>
" >
          </div>
        </div> 
        <div class="col-sm-4">
          <div class="form-group">
            <label style="display:block;">狀態</label>
            <input type="radio" name="enable" id="enable" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['enable'] == '1') {?>checked<?php }?>>
            <label for="enable_1" style="display:inline;">啟用</label>&nbsp;&nbsp;
            
            <input type="radio" name="enable" id="enable" value="0" <?php if ($_smarty_tpl->tpl_vars['row']->value['enable'] == '0') {?> checked <?php }?>>
            <label for="enable_0" style="display:inline;">停用</label>
          </div>
        </div>  

        <div class="col-sm-6">
          <div class="form-group">
          <label>建立時間</label>
          <input type="text" class="form-control" name="date" id="date" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
" readonly>
          </div>
        </div> 

        <div class="col-sm-6">
          <div class="form-group">
          <label>內容</label>
          <input type="text" class="form-control" name="content" id="content" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
">
          </div>
        </div> 
       
        <div class="col-sm-12 text-left ">
          <input type="hidden" name="sn" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sn'];?>
">
          <input type="hidden" name="book" id="book" value="prods_update">
          <button type="submit" class="btn btn-primary">送出</button>
          <a class="btn btn-danger" href="userprods.php?book=prods_list" role="button">返回</a>
        </div>
      </div>
    </form>
  </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['book']->value == "prods_list") {?>
  <table class="table table-striped table-bordered table-hover table-sm tablesorter"  id="myTable" >
    <thead>
    <tr>
      <th scope="col">名稱</th>
      <th scope="col">分類</th>
      <th scope="col">狀態</th>   
      <th scope="col" class="text-center">
          <a href="userprods.php?book=prods_insert_form"><i class="fas fa-plus-square"></i>新增</a>
      </th>
      <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['kind_sn'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['row']->value['enable']) {?><i class="fas fa-check"></i><?php }?></td>
              
            <td>
            <a href="userprods.php?book=prods_update_form&sn=<?php echo $_smarty_tpl->tpl_vars['row']->value['sn'];?>
"><i class="far fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="prods_delete(<?php echo $_smarty_tpl->tpl_vars['row']->value['sn'];?>
);"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
      <?php
}
} else {
?>
        <tr>
          <td colspan=4>目前沒有資料</td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <!-- sweetalert2 -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        function prods_delete(sn){
            Swal.fire({
                title: '你確定嗎？',
                text: "您將無法還原！",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '是的，刪除它！',
                cancelButtonText: '取消'
                }).then((result) => {
                if (result.value) {
                    document.location.href="userprods.php?book=prods_delete&sn="+sn;
                }
            })
        }
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['book']->value == "prods_insert_form") {?>
  <div class="container mt-5" >
    <h1 class="text-center">房型新增資料表</h1>
    <form action="userprods.php" method="post" id="bookreg" class="mb-20" enctype="multipart/form-data">
      <div class="row">         
               
        <div class="col-sm-4">
          <div class="form-group">
          <label>名稱</label>
          <input type="text" class="form-control" name="title" id="title"  >
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
          <label>分類</label>
          <input type="text" class="form-control" name="kind_sn" id="kind_sn" >
          </div>
        </div> 
        
        <div class="col-sm-4">
          <div class="form-group">
            <label style="display:block;">狀態</label>
            <input type="radio" name="enable" id="enable" value="1">
            <label for="enable_1" style="display:inline;">啟用</label>&nbsp;&nbsp;
            
            <input type="radio" name="enable" id="enable" value="0">
            <label for="enable_0" style="display:inline;">停用</label>
          </div>
        </div>  

        <div class="col-sm-6">
          <div class="form-group">
          <label>內容</label>
          <input type="text" class="form-control" name="content" id="content" >
          </div>
        </div> 
       
        <div class="col-sm-12 text-left ">
          <input type="hidden" name="book" id="book" value="prods_insert">
          <button type="submit" class="btn btn-primary">送出</button>
          <a class="btn btn-danger" href="userprods.php?book=prods_list" role="button">返回</a>
        </div>
      </div>
    </form>
  </div>
<?php }?>

<?php echo '<script'; ?>
 src='//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/tablesorter/css/theme.blue.min.css"></link>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/tablesorter/jquery.tablesorter.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $("#myTable").tablesorter({
  theme: "blue",
  widgets: ['zebra']
  });
<?php echo '</script'; ?>
>
<?php }
}
