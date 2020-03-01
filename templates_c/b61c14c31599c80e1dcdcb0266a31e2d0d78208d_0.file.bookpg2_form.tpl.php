<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-20 10:12:12
  from 'D:\xampp\htdocs\Greentea_Booking-0218\templates\tpl\book\bookpg2_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4e4d6c3d8d56_85860253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b61c14c31599c80e1dcdcb0266a31e2d0d78208d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0218\\templates\\tpl\\book\\bookpg2_form.tpl',
      1 => 1582185935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e4d6c3d8d56_85860253 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/bootstrap.min.css">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>

<style>
  .error{
    color:red;
}
</style>

<div class="site-wrap" id="home-section">
  <div class="site-section">
    <div class="row">
      <div class = "col-3">   
        <div class="list-group" id="list-tab" role="tablist">
          <a href = "page_sw.php?pageid=2&bookpage=1" >
            <li class="list-group-item ">
            <stong>線上系統說明</stong>
          </li>

          </a>
          <a href = "page_sw.php?pageid=2&bookpage=2">
            <li class="list-group-item btn-hold">
            <stong>填寫表單</stong>
            </li>
          </a>

          <a href = "page_sw.php?pageid=2&bookpage=3" class="activeno">
            <li class="list-group-item">
            <stong>完成表單</stong>
            </li>
          </a>

          <a href = "page_sw.php?pageid=2&bookpage=4">
            <li class="list-group-item">
            <stong>查詢表單</stong>
            </li>
          </a>
        </div>
      </div>  

      <div class = "col-9">   
        <form action="Onbooking.php?pageid=3&bookpage=3" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
          <div class="book-container alert alert-warning ">
            <div class = "title-font">  
              <div class="col-sm-12">填寫表單</div>
              <div class="col-sm-12">
              <h4>心在哪裡，就在哪裡－ 民宿等你來發掘！</h4>
              </div>
            </div>

          <div class="row container book-body"> 
            <div class="col-sm-6">
              <div class="form-group">
                  <label>姓名<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="usname" name="usname">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>電話<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="usphone" name="usphone">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>電子郵件 <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="usemail" name="usemail">
              </div>
            </div> 
            <div class="col-sm-6">
              <div class="form-group">
                <label>地區 <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="usarea" name="usarea">
              </div>
            </div> 
            <div class="col-sm-6">
              <div class="form-group datetest">
                <label>入房時間<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="datein" name="datein">
              </div>
            </div>           
            <div class="col-sm-6">
              <div class="form-group datetest">
                <label>退房時間<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="dateout" name="dateout">
              </div>
            </div>   
                    
            <div class="col-sm-6">
              <label>人數<span class="text-danger">*</span></label>
              <div class="form-group">   
                <select class="form-control" name="usnum" id="usnum">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>                                 
            </div> 

          <div class="col-sm-6">
            <label>房型<span class="text-danger">*</span"></label>                                  
            <div class="form-group">   
              <select class="form-control" name="ustype" id="ustype">
                <option>單人套房-(1人)</option>
                <option>經典雙人-(2人)</option>
                <option>古典雙人-(2人)</option>
                <option>家庭四人-(4人)</option>
                <option>旅遊-(10人以上)</option>
              </select>
            </div>
          </div> 

            <div class="col-sm-12">
              <div class="form-group">
                <label class="control-label">備註</label>
                <textarea class="form-control" rows="4" id="usadd" value="" name="usadd"></textarea>
              </div>
            </div>

          <div class="col-sm-4">
            <div id = 'foo'></div>
          </div>

          <div class="pb-20 amplif-gap">
            <input type="hidden" name="bookbehavior" value="onlineBook" id="bookbehavior">
           
            <button type="submit" class="btn btn-primary">確認表單</button>
          </div>

          <div class="pb-20 amplif-gap">
            <button type="reset" class="btn btn-danger">清除表單</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php }
}
