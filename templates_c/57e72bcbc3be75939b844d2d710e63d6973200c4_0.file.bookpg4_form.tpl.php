<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 09:53:56
  from 'D:\xampp\htdocs\booking-web_v0301\templates\tpl\book\bookpg4_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5cc9a409c094_27248099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57e72bcbc3be75939b844d2d710e63d6973200c4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\booking-web_v0301\\templates\\tpl\\book\\bookpg4_form.tpl',
      1 => 1583139233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/book/front_table.tpl' => 1,
  ),
),false)) {
function content_5e5cc9a409c094_27248099 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div class="site-section">
  <div class="row">
    <div class = "col-3">   
      <div class="list-group" id="list-tab" role="tablist">
       <li class="list-group-item item-title"><stong>線上預定系統</stong></li>
        <a href = "page_sw.php?pageid=2&bookpage=1">
        <li class="list-group-item "><stong>預定系統說明</stong></li>
        </a>
                  
        <a href = "page_sw.php?pageid=2&bookpage=2" class="activeno">
        <li class="list-group-item"><stong>填寫表單</stong></li>
        </a>

        <a href = "page_sw.php?pageid=2&bookpage=3" class="activeno">
        <li class="list-group-item"><stong>完成表單</stong></li>
        </a>
        <li class="list-group-item item-title"><stong>查詢系統</stong></li>
        <a href = "page_sw.php?pageid=2&bookpage=4&using=no">
        <li class="list-group-item item-mark"><stong>住宿查詢</stong></li>
        </a>
      </div>
    </div>  
              
    <div class = "col-9">   
      <form action="Onbooking.php?bookpage=4&#myForm" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
        <div class="row book-container text-center ">
          <div class="col-sm-12 title-font book_all_title">
            <i class="fas fa-angle-double-right"></i>
            <span>住宿查詢</span>
          </div>

          <div class = "col-sm-12
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                <li class="breadcrumb-item"><a href="page_sw.php?pageid=2&bookpage=1">線上預訂</a></li>
                <li class="breadcrumb-item active" aria-current="page">住宿查詢</li>
              </ol>
            </nav>
          </div>    
          <div class="col-sm-12 alert alert-secondary book_all_body">       
            <div class = "book-form-title">住宿查詢</div> 

            <div class="row container book-body">           
              <div class="col-sm-6 ">
                <div class="form-group">
                  <label>使用電子郵件查詢<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="Inquiremail" name="Inquiremail">
                </div>
              </div> 

              <input type="hidden" name="book" value="visitbook" id="book">
              <div class="col-sm-12">
                <?php $_smarty_tpl->_subTemplateRender("file:tpl/book/front_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
              </div>

              <div class="col-sm-12 ">
                <div class="pb-20 amplif-gap">
                  <input type="hidden" name="using" value="yes" id="using">
                  <button type="submit" class="btn btn-primary ">查詢</button>
                </div>
              </div>
               </div> 
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
 

  

  
<?php }
}
