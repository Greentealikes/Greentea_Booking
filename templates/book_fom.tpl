<!doctype html>
<html lang="en">

<head>
<title>Approach &mdash; Website Template by Colorlib</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Poppins:400,900|Source+Serif+Pro&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<{$xoImgUrl}>fonts/icomoon/style.css">

<link rel="stylesheet" href="<{$xoImgUrl}>css/bootstrap.min.css">
<link rel="stylesheet" href="<{$xoImgUrl}>css/bootstrap-datepicker.css">
<link rel="stylesheet" href="<{$xoImgUrl}>css/jquery.fancybox.min.css">
<link rel="stylesheet" href="<{$xoImgUrl}>css/owl.carousel.min.css">
<link rel="stylesheet" href="<{$xoImgUrl}>css/owl.theme.default.min.css">
<link rel="stylesheet" href="<{$xoImgUrl}>fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="<{$xoImgUrl}>css/aos.css">


<!-- MAIN CSS -->
<link rel="stylesheet" href="<{$xoImgUrl}>css/style.css">
</head>

<link rel="stylesheet"  type="text/css" href="<{$xoImgUrl}>css/bookstyle.css">

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div class="site-wrap" id="home-section">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

  <div class = "header fixed-top">
    <header class="site-navbar site-navbar-target " role="banner">
      <div class="container">
          <div class="row align-items-center position-relative">
              <div class="col-3">
                  <div class="site-logo">
                      <a href="index.php" class="font-weight-bold">Approach</a>
                  </div>
              </div>

              <div class="col-9  text-right">
                  <span class="d-inline-block d-lg-none">
                      <a href="#" class="text-primary site-menu-toggle js-menu-toggle py-5">
                          <span class="icon-menu h3 text-primary">
                          </span>
                      </a>
                  </span>
                  
                  <nav class="site-navigation text-right ml-auto d-none d-lg-block " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto ">
                      <li class="nav_active"><a href="switch.php?pageid=1" class="nav-link">關於我們</a></li>
                      <li><a href="switch.php?pageid=2&bookpage=1" class="nav-link">線上預訂</a></li>
                      <li><a href="switch.php?pageid=3" class="nav-link">服務</a></li>
                      <li><a href="switch.php?pageid=4" class="nav-link">周邊活動</a></li>
                      <li><a href="switch.php?pageid=5" class="nav-link">聯繫我們</a></li>
          
                  <{if $smarty.session.admin}>
                      <li><a href="user.php" class="nav-link">管理員</a></li>
                      <li><a href="user.php?op=logout" class="nav-link">Logout</a></li>                     
                  <{else}>
                      <li><a href="user.php" id="userin" class="nav-link">Login</a></li>                     
                  <{/if}>
                    </ul>
                  </nav>

              </div>
          </div>
      </div>
    </header>
  </div>

  <div class = "logoimage" style="margin-top:50px;">               
    <img src="<{$xoImgUrl}>images/logoimg.jpg" alt="Image" class="img-fluid"></a>
  </div>     

  <div class="Marquee-alert">
    <marquee behavior="behavior" width="100%" loop="2">
    歡迎來客訪問，如要線上預訂，可線上填單或是直接電話來電09-xxx-xx-xxx
    </marquee>
  </div> 

  

  <{if $bookpage == 1 }>
	  <{include file="tpl/bookpg1_form.tpl"}>
  <{elseif $bookpage == 2}>
		<{include file="tpl/bookpg2_form.tpl"}>
  <{elseif $bookpage == 3}>  
    <{include file="tpl/bookpg3_form.tpl"}> 
  <{elseif $bookpage == 4}>  
    <{include file="tpl/bookpg4_form.tpl"}> 
  <{else}>
    <{include file="tpl/bookpg1_form.tpl"}>    
  <{/if}>


  <{*結尾宣告*}>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="<{$xoImgUrl}>images/client_google.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-3">
          <img src="<{$xoImgUrl}>images/client_invision.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-3">
          <img src="<{$xoImgUrl}>images/client_nike.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-3">
          <img src="<{$xoImgUrl}>images/client_microsoft.png" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
      
      
      
  <div class="footer site-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="site-logo-footer">
            <a href="index.html">Approach</a>
          </div> 
        </div>
        <div class="col-md-8 ml-auto">
          <div class="row">
            <div class="col-md-4 ml-auto">
              <ul class="list-unstyled links">
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">hello@mydomain.com</a></li>
                <li><a href="#">+1 829 2293 382</a></li>
                <li><a href="#">Support</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul class="list-unstyled links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About Us</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul class="list-unstyled links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-4 text-center">
        <div class="col">
          <a href="#"><span class="m-2 icon-facebook"></span></a>
          <a href="#"><span class="m-2 icon-twitter"></span></a>
          <a href="#"><span class="m-2 icon-linkedin"></span></a>
          <a href="#"><span class="m-2 icon-instagram"></span></a>
          <a href="#"><span class="m-2 icon-skype"></span></a>
        </div>
      </div>
      <div class="row mt-5 justify-content-center">
        <div class="col-md-7 text-center">
          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </div>
 
</body>
</html>

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
<{if $redirect}>
  <script>
    window.onload = function(){
      Swal.fire({
        //position: 'top-end',
        icon: 'success',
        title: "<{$message}>",
        showConfirmButton: false,
        timer: <{$time}>
      })
    }
  </script>
<{/if}>

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






 

