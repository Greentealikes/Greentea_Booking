<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-01 14:36:31
  from 'D:\xampp\htdocs\Greentea_Booking-teaing_v0227\templates\tpl\admin_member_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5bba5fdb8340_68148492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'febb2d69373e579f17584899591001ab098db45b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-teaing_v0227\\templates\\tpl\\admin_member_form.tpl',
      1 => 1583069790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5bba5fdb8340_68148492 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['op']->value == "op_list") {?>
  <table class="table table-striped table-bordered table-hover table-sm myTable" id="myTable">
    <thead>
    <tr>
      <th scope="col">帳號</th>
      <th scope="col">姓名</th>
      <th scope="col">電話</th>
      <th scope="col">EMAIL</th>
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
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['uname'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['tel'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
          <td>
            <?php if ($_smarty_tpl->tpl_vars['row']->value['kind'] == 1) {?>
              <a href="user.php?op=op_form&uid=<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"><i class="fas fa-user-check"></i></a>
            <?php }?>
          <td>
            <a href="user.php?op=op_form&uid=<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"><i class="far fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="op_delete(<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
);"><i class="far fa-trash-alt"></i></a>
          </td>
        </tr>
      <?php
}
} else {
?>
        <tr>
          <td colspan=6>目前沒有資料</td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
        function op_delete(uid){
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
                    document.location.href="user.php?op=op_delete&uid="+uid;
                }
            })
        }
    <?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['op']->value == "op_form") {?>    
  <div class="container mt-5">
    <h1 class="text-center">會員表單</h1>
    <form action="user.php" method="post" id="myreg" class="mb-20" enctype="multipart/form-data">
      <div class="row">         
        <!--帳號-->              
        <div class="col-sm-4">
          <div class="form-group">
          <label>會員帳號</label>
          <input type="text" class="form-control" name="uname" id="uname" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['uname'];?>
" readonly>
          </div>
        </div>         
        <!--密碼-->              
        <div class="col-sm-4">
          <div class="form-group">
          <label>會員密碼<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="pass" id="pass" value="">
          </div>
        </div>
        <!-- 會員狀態  -->
        <div class="col-sm-4">
          <div class="form-group">
            <label style="display:block;">會員狀態<span class="text-danger">*</span></label>
            <input type="radio" name="kind" id="kind_1" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['kind'] == '1') {?>checked<?php }?> >
            <label for="kind_1" style="display:inline;">管理員</label>&nbsp;&nbsp;
            
            <input type="radio" name="kind" id="kind_0" value="0" <?php if ($_smarty_tpl->tpl_vars['row']->value['kind'] == '0') {?>checked<?php }?> >
            <label for="kind_0" style="display:inline;">會員</label>
          </div>
        </div>  
        <!--姓名-->              
        <div class="col-sm-4">
          <div class="form-group">
          <label>會員真實姓名</label>
          <input type="text" class="form-control" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" readonly>
          </div>
        </div>         
        <!--電話-->              
        <div class="col-sm-4">
          <div class="form-group">
          <label>會員電話</label>
          <input type="text" class="form-control" name="tel" id="tel" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tel'];?>
"readonly>
          </div>
        </div>             
        <!--信箱-->              
        <div class="col-sm-4">
          <div class="form-group">
          <label>會員信箱</label>
          <input type="text" class="form-control" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
"readonly>
          </div>
        </div> 

        <div class="col-sm-12 text-left">
          <input type="hidden" name="op" value="op_update">
          <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
">
          <button type="submit" class="btn btn-primary">送出</button>
          <a class="btn btn-danger" href="user.php" role="button">返回</a>
        </div>
      </div>
    </form>
  </div>

  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/typed.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    !function ($) {
      var typed = new Typed('.typed-words', {
        strings: ["Business", " Startups", " Organization", " Company"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
      })
    };
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.validate.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(function(){
      $("#myreg").validate({
        submitHandler: function(form) {
        form.submit();},
      rules: {
        'uname':{
          required: true}},
          
      messages: {
        'uname' : {
          required: "必填"}}        
        }
      );
    });
  <?php echo '</script'; ?>
>
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
><?php }
}
