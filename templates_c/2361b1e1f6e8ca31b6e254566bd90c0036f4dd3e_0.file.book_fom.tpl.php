<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-19 10:01:12
  from 'D:\xampp\htdocs\Greentea_Booking-0218\templates\book_fom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4cf95842d6e9_18946274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2361b1e1f6e8ca31b6e254566bd90c0036f4dd3e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-0218\\templates\\book_fom.tpl',
      1 => 1582102863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/book/bookpg2_form.tpl' => 1,
    'file:tpl/book/bookpg3_form.tpl' => 1,
    'file:tpl/book/bookpg4_form.tpl' => 1,
    'file:tpl/book/bookpg1_form.tpl' => 1,
  ),
),false)) {
function content_5e4cf95842d6e9_18946274 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class = "logoimage" style="margin-top:50px;">               
    <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
images/logoimg.jpg" alt="Image" class="img-fluid"></a>
  </div>     

  <div class="Marquee-alert">
    <marquee behavior="behavior" width="100%" loop="2">
    歡迎來客訪問，如要線上預訂，可線上填單或是直接電話來電09-xxx-xx-xxx
    </marquee>
  </div> 

  <?php if ($_smarty_tpl->tpl_vars['bookpage']->value == 2) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/book/bookpg2_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } elseif ($_smarty_tpl->tpl_vars['bookpage']->value == 3) {?>  
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/book/bookpg3_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
  <?php } elseif ($_smarty_tpl->tpl_vars['bookpage']->value == 4) {?>  
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/book/bookpg4_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/book/bookpg1_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
  <?php }?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery-migrate-3.0.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/owl.carousel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.sticky.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.animateNumber.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.fancybox.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/isotope.pkgd.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/aos.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
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
js/main.js"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.css"> 


  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.validate.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(function(){
        $('#myForm').validate({
       
       onkeyup: function(element, event) {
        
         var value = this.elementValue(element).replace(/^\s+/g, "");
         $(element).val(value);
        },
        rules: {
          usname: {
            required: true
          },
          usphone:{
            required: true,
            minlength: 8,
            number: true
          }, 
          usemail: {
            required: true,
            email: true
          },
          usarea:{
            required:true
          },
          datein:{
            required:true
          },
          dateout:{
            required:true
          }
         
        },
        messages: {
          usname: {
            required:'必填'
          },
          usphone: {
            required:'必填',
            minlength:'不得少於8位',
            number:'電話需為數字'
          }, 
          usemail: {
            required:'必填',
            email:'Email格式不正確'
          },
          usarea:{
            required:'必填'
          },
          datein:{
            required:'必填'
          },
          dateout:{
            required:'必填  '
          }   
        },
        submitHandler: function(form) {
          form.submit();
        }
  });
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
        }));
    });
<?php echo '</script'; ?>
>






 

<?php }
}
