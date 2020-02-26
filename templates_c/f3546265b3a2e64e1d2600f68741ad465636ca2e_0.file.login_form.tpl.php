<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-26 13:50:18
  from 'D:\xampp\htdocs\Greentea_Booking-0226xxxx\templates\tpl\login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e56698a29aaa7_26630421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3546265b3a2e64e1d2600f68741ad465636ca2e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0226xxxx\\templates\\tpl\\login_form.tpl',
      1 => 1582598190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e56698a29aaa7_26630421 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <head>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  </head>
  
  <div class="login_interval">
    <form class="form-signin" action="page_sw.php?op=login" method="post">
        <h1 class="h3 mb-3 font-weight-normal">會員登入</h1>
        <div class="mb-3" style="margin:10px 0px; ">
          <label for="uname" class="sr-only">帳號</label>
          <input type="text" name="uname" id="uname" class="form-control" placeholder="請輸入帳號"  required>
        </div>
        <div class="mb-3">
          <label for="pass" class="sr-only">密碼</label>
          <input type="password" name="pass" id="pass" class="form-control" placeholder="請輸入密碼" required>
        </div>
            
        <div class="checkbox mb-3">
          <label>
          <input type="hidden" name="op" value="login" id="op">
          <input type="checkbox" name="remember" id="remember"> 記住我
          </label>             
        </div>               
                
        <button class="btn btn-lg btn-primary btn-block" type="submit">會員登入</button>
        <div>
          您還沒還沒註冊嗎？請 <a href="page_sw.php?op=reg_form&pageid=6">點選此處註冊您的新帳號</a>。
        </div>
    </form>
  </div>        
  <!--<h2><?php echo $_smarty_tpl->tpl_vars['op']->value;?>
</h2>-->
  <?php }
}
