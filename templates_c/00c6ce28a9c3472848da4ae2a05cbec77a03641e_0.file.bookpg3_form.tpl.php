<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-18 07:35:35
  from 'D:\xampp\htdocs\Greentea_Booking-0215\templates\tpl\bookpg3_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4b85b7d69748_06609079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00c6ce28a9c3472848da4ae2a05cbec77a03641e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0215\\templates\\tpl\\bookpg3_form.tpl',
      1 => 1581752655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4b85b7d69748_06609079 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="site-wrap" id="home-section">
  <div class="site-section">
    <div class="row">
      <div class = "col-3">   
        <div class="list-group" id="list-tab" role="tablist">
            <a href = "page_sw.php?pageid=2&bookpage=1">
              <li class="list-group-item "><stong>線上系統說明</stong></li>
            </a>
            <a href = "page_sw.php?pageid=2&bookpage=2">
              <li class="list-group-item "><stong>填寫表單</stong></li>
            </a>
            <a href = "page_sw.php?pageid=2&bookpage=3">
              <li class="list-group-item btn-hold"><stong>完成表單</stong></li>
            </a>
            <a href = "page_sw.php?pageid=2&bookpage=4">
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
                  <?php echo $_smarty_tpl->tpl_vars['tableshow']->value;?>

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
