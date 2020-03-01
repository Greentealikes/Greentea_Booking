<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-26 14:04:19
  from 'D:\xampp\htdocs\Greentea_Booking-0226xxxx\templates\tpl\book\bookpg3_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e566cd34dfa55_52516551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a41ec0cb42b13cda09acc4a9323edea8618effd9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0226xxxx\\templates\\tpl\\book\\bookpg3_form.tpl',
      1 => 1582621326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/book/front_table.tpl' => 1,
  ),
),false)) {
function content_5e566cd34dfa55_52516551 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="site-wrap" id="home-section">
  <div class="site-section">
    <div class="row">
      <div class = "col-3">   
        <div class="list-group" id="list-tab" role="tablist">
         <li class="list-group-item item-title"><stong>線上預定系統</stong></li>
            <a href = "page_sw.php?pageid=2&bookpage=1">
              <li class="list-group-item "><stong>預定系統說明</stong></li>
            </a>
            <a href = "page_sw.php?pageid=2&bookpage=2" class="activeno">
              <li class="list-group-item "><stong>填寫表單</stong></li>
            </a>
            <a href = "page_sw.php?pageid=2&bookpage=3">
              <li class="list-group-item item-mark"><stong>完成表單</stong></li>
            </a>
              <li class="list-group-item item-title"><stong>查詢系統</stong></li>
            <a href = "page_sw.php?pageid=2&bookpage=4&using=no">
              <li class="list-group-item"><stong>住宿查詢</stong></li>
            </a>
        </div>
      </div>  

      <div class = "col-9">   
        <form action="Onbooking.php" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
          <div class = "row book-container text-center ">                 
            <div class="col-sm-12 title-font book_all_title">
              <i class="fas fa-angle-double-right"></i>
              <span>完成表單</span>
            </div>      
            <div class="col-sm-12 alert alert-secondary book_all_body">   
              <div class = "book-form-title"> 完成線上預訂</div>   
              <div class="row container book-form_body">               
                <?php $_smarty_tpl->_subTemplateRender("file:tpl/book/front_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
              </div>
            </div>    

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

 <?php }
}
