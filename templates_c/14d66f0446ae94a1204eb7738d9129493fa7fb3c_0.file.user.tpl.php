<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-25 03:50:15
  from 'D:\xampp\htdocs\Greentea_Booking-0221\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e548b67a273a4_19162299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14d66f0446ae94a1204eb7738d9129493fa7fb3c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0221\\templates\\user.tpl',
      1 => 1582599000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/admin_table_form.tpl' => 1,
  ),
),false)) {
function content_5e548b67a273a4_19162299 (Smarty_Internal_Template $_smarty_tpl) {
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
      <div class="col-sm-9 form_content">
        <?php if ($_smarty_tpl->tpl_vars['WEB']->value['file_name'] == "user.php") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:tpl/admin_table_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
      </div>
      <div class="col-sm-3 nav_content">
        <div class="card text-white bg-secondary mb-3" style="width: 18rem;">
          <div class="card-header ">管理員</div>
            <div class="list-group">
              <a class="list-group-item list-group-item-action list-group-item-dark" href="index.php" id="Back_home">首頁</a>         
              <a class="list-group-item list-group-item-action list-group-item-dark" href="page_sw.php?op=logout&pageid=6" id="user_out">登出</a>
              <a class="list-group-item list-group-item-action list-group-item-dark" 
              href="http://127.0.0.1/phpmyadmin/index.php" target="_blank">資料庫管理</a>
            </div>
          </div>
        </div>
      </div>     
    </div>
  </div>
</body>

</html>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>

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
