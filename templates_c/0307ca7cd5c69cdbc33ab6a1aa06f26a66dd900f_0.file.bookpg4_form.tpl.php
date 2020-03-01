<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-20 10:20:12
  from 'D:\xampp\htdocs\Greentea_Booking-0218\templates\tpl\book\bookpg4_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4e4f4c5972f9_36431680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0307ca7cd5c69cdbc33ab6a1aa06f26a66dd900f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0218\\templates\\tpl\\book\\bookpg4_form.tpl',
      1 => 1582190336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/book/front_table.tpl' => 1,
  ),
),false)) {
function content_5e4e4f4c5972f9_36431680 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div class="site-section">
  <div class="row">
    <div class = "col-3">   
      <div class="list-group" id="list-tab" role="tablist">
        <a href = "page_sw.php?pageid=2&bookpage=1">
        <li class="list-group-item "><stong>線上系統說明</stong></li>
        </a>
                  
        <a href = "page_sw.php?pageid=2&bookpage=2">
        <li class="list-group-item"><stong>填寫表單</stong></li>
        </a>

        <a href = "page_sw.php?pageid=2&bookpage=3">
        <li class="list-group-item"><stong>完成表單</stong></li>
        </a>

        <a href = "page_sw.php?pageid=2&bookpage=4">
        <li class="list-group-item btn-hold"><stong>查詢表單</stong></li>
        </a>
      </div>
    </div>  
              
    <div class = "col-9">   
      <form action="Onbooking.php?bookpage=4" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
        <div class="book-container alert alert-warning  ">
          <div class = "title-font">  
            <div class="col-sm-12">完成表單</div>
              <div class="col-sm-12">
                <h4>心在哪裡，就在哪裡－ 民宿等你來發掘！</h4>
              </div>
            </div>  

            <div class="row container book-body"> 
              <div class="col-sm-5">
                <div class="form-group">
                  <label>姓名<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="Inquirname" name="Inquirname">
                </div>
              </div>

              <div class="col-sm-5 ">
                <div class="form-group">
                  <label>電子郵件 <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="Inquiremail" name="Inquiremail">
                </div>
              </div> 

              <input type="hidden" name="bookbehavior" value="visitbook" id="bookbehavior">
              <div class="col-sm-12">
                <?php $_smarty_tpl->_subTemplateRender("file:tpl/book/front_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
              </div>

              <div class="col-sm-12 ">
                <div class="pb-20 amplif-gap">
                  <button type="submit" class="btn btn-primary ">查詢</button>
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
