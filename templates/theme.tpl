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
    <link rel="stylesheet" href="<{$xoImgUrl}>css/style.css">
    
    <link rel="stylesheet"  type="text/css" href="<{$xoImgUrl}>css/bookstyle.css">
  </head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">  
  <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
        <div class="site-mobile-menu-body">
        </div>
    </div>
  </div>

    <!--  導覽頁面  -->
    <{include file="head.tpl"}>
    
    <!-- 點選導覽頁面切換內容 -->
    <{if $pageid == 0 }>
      <{include file="index_fom.tpl"}>
    <{elseif $pageid == 1}>
      <{include file="about_fom.tpl"}>
    <{elseif $pageid == 2}>
      <{include file="book_fom.tpl"}>
    <{elseif $pageid == 3}>
      <{include file="services_fom.tpl"}>
    <{elseif $pageid == 4}>
      <{include file="blog_fom.tpl"}>
    <{elseif $pageid == 5}>
      <{include file="contact_fom.tpl"}>

    <{elseif $pageid == 6}>
      <{if $smarty.session.admin}>        
        <{include file="tpl/admin_form.tpl"}>
      <{else}>
        <{if $op == reg_form}>
          <{include file="tpl/reg_form.tpl"}>     
        <{else}>
          <{include file="tpl/login_form.tpl"}>
        <{/if}>
      <{/if}>
    <{/if}>


  <!-- 頁尾畫面 -->
  <{include file="footer.tpl"}>
  

  </body>
</html> 

<{* 引入js檔案 *}>
<{include file="tpl/head_js.tpl"}>
  






