<div class = "logoimage" style="margin-top:50px;">               
  <img src="<{$xoImgUrl}>images/logoimg.jpg" alt="Image" class="img-fluid"></a>
</div>     

<div class="Marquee-alert">
  <marquee behavior="behavior" width="100%" loop="2">
  歡迎來客訪問，如要線上預訂，可線上填單或是直接電話來電09-xxx-xx-xxx
  </marquee>
</div> 

<{if $bookpage == 2}>
  <{include file="tpl/book/bookpg2_form.tpl"}>
<{elseif $bookpage == 3}>  
  <{include file="tpl/book/bookpg3_form.tpl"}> 
<{elseif $bookpage == 4}>  
  <{include file="tpl/book/bookpg4_form.tpl"}> 
<{else}>
  <{include file="tpl/book/bookpg1_form.tpl"}>    
<{/if}>

<script src="<{$xoImgUrl}>js/jquery-3.3.1.min.js"></script>
<script src="<{$xoImgUrl}>js/jquery-migrate-3.0.0.js"></script>
<script src="<{$xoImgUrl}>js/popper.min.js"></script>
<script src="<{$xoImgUrl}>js/bootstrap.min.js"></script>
<script src="<{$xoImgUrl}>js/owl.carousel.min.js"></script>
<script src="<{$xoImgUrl}>js/jquery.sticky.js"></script>
<script src="<{$xoImgUrl}>js/jquery.waypoints.min.js"></script>
<script src="<{$xoImgUrl}>js/jquery.animateNumber.min.js"></script>
<script src="<{$xoImgUrl}>js/jquery.fancybox.min.js"></script>
<script src="<{$xoImgUrl}>js/jquery.stellar.min.js"></script>
<script src="<{$xoImgUrl}>js/jquery.easing.1.3.js"></script>
<script src="<{$xoImgUrl}>js/bootstrap-datepicker.min.js"></script>
<script src="<{$xoImgUrl}>js/isotope.pkgd.min.js"></script>
<script src="<{$xoImgUrl}>js/aos.js"></script>
<script src="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.js"></script>
<script src="<{$xoImgUrl}>js/typed.js"></script>
  <script>
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
  </script>
  <script src="<{$xoImgUrl}>js/main.js"></script>

<link rel="stylesheet" href="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.css"> 


  <script src="<{$xoImgUrl}>js/jquery.validate.min.js"></script>
  <script>
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
</script>

<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
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
</script>






 

