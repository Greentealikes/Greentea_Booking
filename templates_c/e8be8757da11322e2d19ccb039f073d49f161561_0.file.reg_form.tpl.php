<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-19 07:52:58
  from 'D:\xampp\htdocs\Greentea_Booking-0218\templates\tpl\reg_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4cdb4a75b9e0_32552207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8be8757da11322e2d19ccb039f073d49f161561' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0218\\templates\\tpl\\reg_form.tpl',
      1 => 1582095084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4cdb4a75b9e0_32552207 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
  .error{
    color:red;
  }
</style>

<div class="container mt-5">
  <h1 class="text-center">註冊表單</h1>
  <form action="page_sw.php" method="post" id="myreg" class="mb-20" enctype="multipart/form-data">
  <div class="row"> 
    <div class="col-sm-4">
      <div class="form-group">
        <label>帳號<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="uname" id="uname" value="" >
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
        <label>密碼<span class="text-danger">*</span></label>
        <input type="password" class="form-control" name="pass" id="pass" value="" >
      </div>
    </div>         
                 
    <div class="col-sm-4">
      <div class="form-group">
        <label>確認密碼<span class="text-danger">*</span></label>
        <input type="password" class="form-control" name="chk_pass" id="chk_pass" value="" >
      </div>
    </div>         
                  
    <div class="col-sm-4">
      <div class="form-group">
        <label>姓名<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="name" id="name" value="" >
      </div>
    </div>         
                  
    <div class="col-sm-4">
      <div class="form-group">
        <label>電話<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="tel" id="tel" value="" >
      </div>
    </div>             
                    
    <div class="col-sm-4">
      <div class="form-group">
        <label>信箱<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="email" id="email" value="" >
      </div>
    </div> 

    <div class="col-sm-12">
      <div class="text-center pb-20">
        <input type="hidden" name="op" value="reg" id="op">
        <button type="submit" class="btn btn-primary">送出</button>
      </div>
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

 
 
<?php }
}
