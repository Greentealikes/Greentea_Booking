<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 07:08:05
  from 'D:\xampp\htdocs\Greentea_Booking-0221\templates\tpl\book\bookpg3_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5368450834f1_39431972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7dfe16d7c2ed3870d991af3cd4c16cc5360f5c6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0221\\templates\\tpl\\book\\bookpg3_form.tpl',
      1 => 1582521853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/book/front_table.tpl' => 1,
  ),
),false)) {
function content_5e5368450834f1_39431972 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="site-wrap" id="home-section">
  <div class="site-section">
    <div class="row">
      <div class = "col-3">   
        <div class="list-group" id="list-tab" role="tablist">
         <li class="list-group-item item-title"><stong>預約定房系統</stong></li>
            <a href = "page_sw.php?pageid=2&bookpage=1">
              <li class="list-group-item "><stong>線上系統說明</stong></li>
            </a>
            <a href = "page_sw.php?pageid=2&bookpage=2" class="activeno">
              <li class="list-group-item "><stong>填寫表單</stong></li>
            </a>
            <a href = "page_sw.php?pageid=2&bookpage=3">
              <li class="list-group-item item-mark"><stong>完成表單</stong></li>
            </a>
              <li class="list-group-item item-title"><stong>查詢系統</stong></li>
            <a href = "page_sw.php?pageid=2&bookpage=4&using=no">
              <li class="list-group-item"><stong>查詢表單</stong></li>
            </a>
        </div>
      </div>  

      <div class = "col-9">   
        <form action="Onbooking.php" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
          <div class="book-container alert alert-warning ">
            <div class = "title-font">  
              <div class="col-sm-12">完成表單</div>
                <div class="col-sm-12">
                <h4>心在哪裡，就在哪裡－ 民宿等你來發掘！</h4>
                </div>
              </div>
              <div class="row book-body">
                <div class="col-sm-12">  
                  <?php $_smarty_tpl->_subTemplateRender("file:tpl/book/front_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
                </div>
              </div>
            <div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

 <?php }
}
