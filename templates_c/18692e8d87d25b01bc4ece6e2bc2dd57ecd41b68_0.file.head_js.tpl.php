<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-28 02:43:34
  from 'D:\xampp\htdocs\Greentea_Booking-teaing_v0227\templates\tpl\head_js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e58704662cef4_85720515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18692e8d87d25b01bc4ece6e2bc2dd57ecd41b68' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Greentea_Booking-teaing_v0227\\templates\\tpl\\head_js.tpl',
      1 => 1582794304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e58704662cef4_85720515 (Smarty_Internal_Template $_smarty_tpl) {
?>    <title><?php echo $_smarty_tpl->tpl_vars['WEB']->value['web_title'];?>
</title>
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



    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.css"> 
    <?php if ($_smarty_tpl->tpl_vars['redirect']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['sn']->value == 1) {?>
            <?php echo '<script'; ?>
>
                window.onload = function(){
                    Swal.fire({
                    //position: 'top-end',
                    icon: 'success',
                    title: "<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
",
                    showConfirmButton: false,
                    timer: <?php echo $_smarty_tpl->tpl_vars['time']->value;?>

                    })
                }
            <?php echo '</script'; ?>
>
        <?php } else { ?>
            <?php echo '<script'; ?>
>
                window.onload = function(){
                    Swal.fire({
                    //position: 'top-end',
                    icon: 'error',
                    title: "<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
",
                    showConfirmButton: false,
                    timer: <?php echo $_smarty_tpl->tpl_vars['time']->value;?>

                    })
                }
            <?php echo '</script'; ?>
>
        <?php }?>
    <?php }?>



    
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
            
            $('#datetimepicker11,#datetimepicker1').datetimepicker({
            daysOfWeekDisabled: [0, 6]
    });
        }));
    });
<?php echo '</script'; ?>
><?php }
}
