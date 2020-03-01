<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-27 02:53:34
  from 'D:\xampp\htdocs\Greentea_Booking-0226xxxx\Greentea_Booking\templates\tpl\admin_book_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e57211ecf3aa2_70117935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00982bef4ad6564062ddb593ef0e9939fcada748' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0226xxxx\\Greentea_Booking\\templates\\tpl\\admin_book_form.tpl',
      1 => 1582768124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e57211ecf3aa2_70117935 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['book']->value == "book_list") {?>
   <table class="table table-striped table-bordered table-hover table-sm">
    <thead>
    <tr>
      <th scope="col">顧客姓名</th>
      <th scope="col">顧客電話</th>
      <th scope="col">顧客email</th>
      <th scope="col">入住時間</th>
      <th scope="col">退房時間</th>
      <th scope="col">人數</th>
      <th scope="col">訂房種類</th>     
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
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usphone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usemail'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['datein'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dateout'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usnum'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ustype'];?>
</td>           
            <td>
            <a href="userbook.php?book=book_form&usid=<?php echo $_smarty_tpl->tpl_vars['row']->value['usid'];?>
"><i class="far fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="op_delete(<?php echo $_smarty_tpl->tpl_vars['row']->value['usid'];?>
);"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
      <?php
}
} else {
?>
        <tr>
          <td colspan=8>目前沒有資料</td>
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
        function op_delete(usid){
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
                    document.location.href="userbook.php?book=book_delete&usid="+usid;
                }
            })
        }
    <?php echo '</script'; ?>
>

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['book']->value == "book_form") {?>    
  <div class="container mt-5" >
    <h1 class="text-center">預約訂房資料表</h1>
    <form action="userbook.php" method="post" id="bookreg" class="mb-20" enctype="multipart/form-data">
      <div class="row">         
        <!--姓名-->              
        <div class="col-sm-3">
          <div class="form-group">
          <label>姓名</label>
          <input type="text" class="form-control" name="usname" id="usname" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['usname'];?>
" readonly>
          </div>
        </div> 

        <!--電話-->              
        <div class="col-sm-3">
          <div class="form-group">
          <label>電話</label>
          <input type="text" class="form-control" name="usphone" id="usphone" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['usphone'];?>
"readonly>
          </div>
        </div> 

        <!--信箱-->              
        <div class="col-sm-6">
          <div class="form-group">
          <label>信箱</label>
          <input type="text" class="form-control" name="usemail" id="usemail" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['usemail'];?>
"readonly>
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>入住時間</label>
          <input type="text" class="form-control" name="ordatein" id="ordatein" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['datein'];?>
"readonly>
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>退房時間</label>
          <input type="text" class="form-control" name="ordateout" id="ordateout" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['dateout'];?>
"readonly>
          </div>
        </div> 
        
        <div class="col-sm-3">
          <div class="form-group">
          <label>人數</label>
          <input type="text" class="form-control" name="usnum" id="usnum" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['usnum'];?>
">
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>種類</label>
          <input type="text" class="form-control" name="ustype" id="ustype" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ustype'];?>
">
          </div>
        </div> 

     

        <div class="col-sm-6">
          <div class="form-group">
          <label>區域</label>
          <input type="text" class="form-control" name="usarea" id="usarea" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['usarea'];?>
"readonly>
          </div>
        </div> 

        <div class="col-sm-12">
          <div class="form-group">
          <label>備註</label>
          <textarea class="form-control" name="usadd" id="usadd" 
            rows="5" cols="40"><?php echo $_smarty_tpl->tpl_vars['row']->value['usadd'];?>
</textarea>        
          </div>
        </div> 

        <div class="text-center pb-20">
        <input type="hidden" name="book" value="book_update">
        <input type="hidden" name="usid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['usid'];?>
">
        <button type="submit" class="btn btn-primary">送出</button>
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
      $("#bookreg").validate({
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

<?php }
}
