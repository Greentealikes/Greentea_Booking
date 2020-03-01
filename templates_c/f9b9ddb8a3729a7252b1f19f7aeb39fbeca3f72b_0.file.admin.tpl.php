<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-27 02:53:17
  from 'D:\xampp\htdocs\Greentea_Booking-0226xxxx\Greentea_Booking\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e57210d802f53_51719170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9b9ddb8a3729a7252b1f19f7aeb39fbeca3f72b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0226xxxx\\Greentea_Booking\\templates\\admin.tpl',
      1 => 1582768124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/admin_member_form.tpl' => 1,
    'file:tpl/admin_book_form.tpl' => 1,
    'file:tpl/head_js.tpl' => 1,
  ),
),false)) {
function content_5e57210d802f53_51719170 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <title>Approach &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
fonts/googleapis.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/bootstrap.min.css">    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/jquery.fancybox.min.css">
 
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
fonts/flaticon/font/flaticon.css">
   
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.css"> 
    <link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/backstage.css">
  </head>
      
<body>
  <div contenteditable="true" class="text effect01 title_content">Greentea 後台</div> 
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">管理員</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" 
                href="index.php" id="Back_home">首頁
              <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link "  
                href="user.php" >會員管理</a>
            </li>
            <li class="nav-item">
              <a class="nav-link "
                href="userbook.php?book=book_list">定房管理</a>   
            </li>
            
            <li class="nav-item">
              <a class="nav-link " 
                href="http://127.0.0.1/phpmyadmin/index.php" target="_blank">資料庫管理</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active"
                href="page_sw.php?op=logout&pageid=6" id="user_out">登出</a>
            </li>
           
          </ul>
        </div>
      </nav>

      <div class="col-sm-12 form_content">
        <?php if ($_smarty_tpl->tpl_vars['WEB']->value['file_name'] == "user.php") {?>
            <?php $_smarty_tpl->_subTemplateRender("file:tpl/admin_member_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['WEB']->value['file_name'] == "userbook.php") {?>
           <?php $_smarty_tpl->_subTemplateRender("file:tpl/admin_book_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
      </div>
    </div>
  </div>
</body>

</html>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:tpl/head_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['redirect']->value) {?>
  <?php echo '<script'; ?>
>
    window.onload = function(){
      Swal.fire({
        icon: 'success',
        title: "<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
",
        showConfirmButton: false,
        timer: <?php echo $_smarty_tpl->tpl_vars['time']->value;?>

      })
    }
  <?php echo '</script'; ?>
>
<?php }?>

<?php }
}
