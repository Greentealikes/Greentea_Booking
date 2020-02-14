<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-14 07:54:40
  from 'D:\xampp\htdocs\Greentea_Booking-master\templates\tpl\bookpg4_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e464430b59bf3_46045954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39e16aee0bbd08c297b3474252a154bb4cec41e6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-master\\templates\\tpl\\bookpg4_form.tpl',
      1 => 1581663277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e464430b59bf3_46045954 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div class="site-section">
  <div class="row">
    <div class = "col-3">   
      <div class="list-group" id="list-tab" role="tablist">
        <a href = "switch.php?pageid=2&bookpage=1">
        <li class="list-group-item "><stong>線上系統說明</stong></li>
        </a>
                  
        <a href = "switch.php?pageid=2&bookpage=2">
        <li class="list-group-item"><stong>填寫表單</stong></li>
        </a>

        <a href = "switch.php?pageid=2&bookpage=3">
        <li class="list-group-item"><stong>完成表單</stong></li>
        </a>

        <a href = "switch.php?pageid=2&bookpage=4">
        <li class="list-group-item btn-hold"><stong>查詢表單</stong></li>
        </a>
      </div>
    </div>  
              
    <div class = "col-9">   
      <form action="userbooking.php?bookpage=4" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
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
                <?php echo $_smarty_tpl->tpl_vars['tableshow']->value;?>

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
