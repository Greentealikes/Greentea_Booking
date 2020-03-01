<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-27 09:48:10
  from 'D:\xampp\htdocs\Greentea_Booking-0227\templates\tpl\admin_book_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e57824a27fb66_14005487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a1a574e13e7caf0458748a00ae561808afd0aed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0227\\templates\\tpl\\admin_book_form.tpl',
      1 => 1582793285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e57824a27fb66_14005487 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['book']->value == "book_list") {?>
   <table class="table table-striped table-bordered table-hover table-sm tablesorter"  id="myTable" >
    <thead>
    <tr>
      <th scope="col">顧客姓名</th>
      <th scope="col">顧客電話</th>
      <th scope="col">顧客email</th>
      <th scope="col">入住時間</th>
      <th scope="col">退房時間</th>
      <th scope="col">人數</th>
      <th scope="col">訂房種類</th>     
      <th scope="col">功能</th>
    </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usphone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usemail'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['datein'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dateout'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usnum'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ustype'];?>
</td>           
            <td>
            <a href="userbook.php?book=book_form&usid=<?php echo $_smarty_tpl->tpl_vars['row']->value['usid'];?>
"><i class="far fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="op_delete(<?php echo $_smarty_tpl->tpl_vars['row']->value['usid'];?>
);"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
      <?php
}
} else {
?>
        <tr>
          <td colspan=8>目前沒有資料</td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
<!-- sweetalert2 -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        function op_delete(usid){
            Swal.fire({
                title: '你確定嗎？',
                text: "您將無法還原！",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '是的，刪除它！',
                cancelButtonText: '取消'
                }).then((result) => {
                if (result.value) {
                    document.location.href="userbook.php?book=book_delete&usid="+usid;
                }
            })
        }
    <?php echo '</script'; ?>
>

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['book']->value == "book_form") {?>    
  <div class="container mt-5" >
    <h1 class="text-center">預約訂房資料表</h1>
    <form action="userbook.php" method="post" id="bookreg" class="mb-20" enctype="multipart/form-data">
      <div class="row">         
        <!--姓名-->              
        <div class="col-sm-3">
          <div class="form-group">
          <label>姓名</label>
          <input type="text" class="form-control" name="usname" id="usname" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['usname'];?>
" readonly>
          </div>
        </div> 

        <!--電話-->              
        <div class="col-sm-3">
          <div class="form-group">
          <label>電話</label>
          <input type="text" class="form-control" name="usphone" id="usphone" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['usphone'];?>
"readonly>
          </div>
        </div> 

        <!--信箱-->              
        <div class="col-sm-6">
          <div class="form-group">
          <label>信箱</label>
          <input type="text" class="form-control" name="usemail" id="usemail" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['usemail'];?>
">
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>入住時間</label>
          <input type="text" class="form-control" name="datein" id="datein" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['datein'];?>
">
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>退房時間</label>
          <input type="text" class="form-control" name="dateout" id="dateout" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['dateout'];?>
">
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>人數</label>
          <input type="text" class="form-control" name="usnum" id="usnum" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['usnum'];?>
">
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>種類</label>
          <input type="text" class="form-control" name="ustype" id="ustype" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ustype'];?>
">
          </div>
        </div> 

        <div class="col-sm-6">
          <div class="form-group">
          <label>區域</label>
          <input type="text" class="form-control" name="usarea" id="usarea" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['usarea'];?>
" placeholder="(縣市)/(區)">
          </div>
        </div> 

        <div class="col-sm-12">
          <div class="form-group">
          <label>備註</label>
          <textarea class="form-control" name="usadd" id="usadd"  placeholder="No more than 100 words."
            rows="4" cols="40" value=""><?php echo $_smarty_tpl->tpl_vars['row']->value['usadd'];?>
</textarea>        
          </div>
        </div> 

        <div class="col-sm-12 text-left ">
          <input type="hidden" name="book" value="book_update">
          <input type="hidden" name="usid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['usid'];?>
">
          <button type="submit" class="btn btn-primary">送出</button>
          <a class="btn btn-danger" href="userbook.php?book=book_list" role="button">返回</a>
        </div>
      </div>
    </form>
  </div>

  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/typed.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    !function ($) {
      var typed = new Typed('.typed-words', {
        strings: ["Business", " Startups", " Organization", " Company"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
      })
    };
  <?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.validate.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(function(){
      $("#bookreg").validate({
        submitHandler: function(form) {
        form.submit();},
      rules: {
        'uname':{
          required: true}},
          
      messages: {
        'uname' : {
          required: "必填"}}        
        }
      );
    });
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(function () {
        $("#datein,#dateout").datepicker({
            //可使用下拉式選單 - 月份
            changeMonth: true,
            //可使用下拉式選單 - 年份
            changeYear: true,
            //設定 下拉式選單月份 在 年份的後面
            showMonthAfterYear: true
            
        });
    });

    $(function () {
        (function (factory) {
            if (typeof define === "function" && define.amd) {
                // AMD. Register as an anonymous module.
                define(["../widgets/datepicker"], factory);
            } else {
                // Browser globals
                factory(jQuery.datepicker);
            }

        }(function (datepicker) {
            datepicker.regional["zh-TW"] = {
                closeText: "關閉",
                prevText: "&#x3C;上個月",
                nextText: "下個月&#x3E;",
                currentText: "今天",
                monthNames: ["一月", "二月", "三月", "四月", "五月", "六月",
                    "七月", "八月", "九月", "十月", "十一月", "十二月"],
                monthNamesShort: ["一月", "二月", "三月", "四月", "五月", "六月",
                    "七月", "八月", "九月", "十月", "十一月", "十二月"],
                dayNames: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"],
                dayNamesShort: ["週日", "週一", "週二", "週三", "週四", "週五", "週六"],
                dayNamesMin: ["日", "一", "二", "三", "四", "五", "六"],
                weekHeader: "週",
                dateFormat: "yy-mm-dd",               
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: true,
                yearSuffix: "年"
            };
            datepicker.setDefaults(datepicker.regional["zh-TW"]);
            return datepicker.regional["zh-TW"];
            
            $('#datetimepicker11,#datetimepicker1').datetimepicker({
            daysOfWeekDisabled: [0, 6]
    });
        }));
    });
<?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['book']->value == "category_list") {?>
  <table class="table table-striped table-bordered table-hover table-sm tablesorter"  id="myTable" >
    <thead>
    <tr>
      <th scope="col">分類</th>
      <th scope="col">名稱</th>
      <th scope="col">狀態</th>
      <th scope="col">計數</th>
      <th scope="col" class="text-center">
          <a href="userbook.php?book=category_insert"><i class="fas fa-plus-square"></i>新增</a>
      </th>
    </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['book']->value == "category_insert") {?>
  <div class="container mt-5" >
    <h1 class="text-center">預約訂房資料表</h1>
    <form action="userbook.php" method="post" id="bookreg" class="mb-20" enctype="multipart/form-data">
      <div class="row">         
               
        <div class="col-sm-3">
          <div class="form-group">
          <label>姓名</label>
          <input type="text" class="form-control" name="usname" id="usname" value="" readonly>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="form-group">
          <label>電話</label>
          <input type="text" class="form-control" name="usphone" id="usphone" value=""readonly>
          </div>
        </div> 
              
        <div class="col-sm-6">
          <div class="form-group">
          <label>信箱</label>
          <input type="text" class="form-control" name="usemail" id="usemail" value="">
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>入住時間</label>
          <input type="text" class="form-control" name="datein" id="datein" value="">
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>退房時間</label>
          <input type="text" class="form-control" name="dateout" id="dateout" value="">
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>人數</label>
          <input type="text" class="form-control" name="usnum" id="usnum" value="">
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>種類</label>
          <input type="text" class="form-control" name="ustype" id="ustype" value="">
          </div>
        </div> 

        <div class="col-sm-6">
          <div class="form-group">
          <label>區域</label>
          <input type="text" class="form-control" name="usarea" id="usarea" value="" placeholder="(縣市)/(區)">
          </div>
        </div> 
       
        <div class="col-sm-12 text-left ">
          <button type="submit" class="btn btn-primary">送出</button>
          <a class="btn btn-danger" href="userbook.php?book=book_list" role="button">返回</a>
        </div>
      </div>
    </form>
  </div>
<?php }?>

<?php echo '<script'; ?>
 src='//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/tablesorter/css/theme.blue.min.css"></link>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/tablesorter/jquery.tablesorter.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $("#myTable").tablesorter({
  theme: "blue",
  widgets: ['zebra']
  });
<?php echo '</script'; ?>
>




<?php }
}
