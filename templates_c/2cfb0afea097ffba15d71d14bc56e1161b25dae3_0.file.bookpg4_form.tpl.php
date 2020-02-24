<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 06:45:00
  from 'D:\xampp\htdocs\Greentea_Booking-0221\templates\tpl\book\bookpg4_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5362dc211231_81818734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cfb0afea097ffba15d71d14bc56e1161b25dae3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0221\\templates\\tpl\\book\\bookpg4_form.tpl',
      1 => 1582521860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/book/front_table.tpl' => 1,
  ),
),false)) {
function content_5e5362dc211231_81818734 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div class="site-section">
  <div class="row">
    <div class = "col-3">   
      <div class="list-group" id="list-tab" role="tablist">
       <li class="list-group-item item-title"><stong>預約定房系統</stong></li>
        <a href = "page_sw.php?pageid=2&bookpage=1">
        <li class="list-group-item "><stong>線上系統說明</stong></li>
        </a>
                  
        <a href = "page_sw.php?pageid=2&bookpage=2" class="activeno">
        <li class="list-group-item"><stong>填寫表單</stong></li>
        </a>

        <a href = "page_sw.php?pageid=2&bookpage=3" class="activeno">
        <li class="list-group-item"><stong>完成表單</stong></li>
        </a>
        <li class="list-group-item item-title"><stong>查詢系統</stong></li>
        <a href = "page_sw.php?pageid=2&bookpage=4&using=no">
        <li class="list-group-item item-mark"><stong>查詢表單</stong></li>
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
                  <input type="hidden" name="using" value="yes" id="using">
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
