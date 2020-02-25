
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
    
    <link rel="stylesheet" href="<{$xoImgUrl}>css/bookstyle.css">
    <link href="<{$xoImgUrl}>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<{$xoImgUrl}>css/menu_style.css">
   
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
    <!-- 導覽頁面 -->
    <div class = "header fixed-top">
        <header class="site-navbar site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-3  ">
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
                    
                    <nav class="text-right ml-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto drop-down-menu site-menu-nav">                        
                            <li class="nav_active nav_style "> 
                                <a href="page_sw.php?pageid=1" class="nav-link">關於我們</a>
                                 <ul class="menu-nav">
                                    <li><a href="#">品牌經營</a>
                                    </li>
                                    <li><a href="#">最新消息</a>
                                    </li>                                    
                                </ul>
                            </li>                           
                            <li class="nav_style">
                                <a href="page_sw.php?pageid=3" class="nav-link">民宿服務</a>
                                <ul class="menu-nav">
                                    <li><a href="#">房型介紹</a>
                                    </li>
                                    <li><a href="#">入住資訊</a>
                                    </li>                                    
                                </ul>
                            </li>

                            <li class="nav_style">
                            <a href="page_sw.php?pageid=4" class="nav-link">相關活動</a>
                                 <ul class="menu-nav">
                                    <li><a href="#">手作課程a</a>
                                    </li>
                                    <li><a href="#">手作課程b</a>
                                    </li>  
                                     <li><a href="#">手作課程c</a>
                                    </li>                                   
                                </ul>
                            </li>
                            <li class="nav_style">
                                <a href="page_sw.php?pageid=2&bookpage=1" class="nav-link">線上預訂</a>
                                 <ul class="menu-nav">
                                    <li><a href="page_sw.php?pageid=2&bookpage=1">住宿預定</a>
                                    </li>
                                    <li><a href="page_sw.php?pageid=2&bookpage=4&using=no">住宿查詢</a>
                                    </li>                                    
                                </ul>
                            </li>
                            <li class="nav_style"><a href="page_sw.php?pageid=5" class="nav-link">聯繫我們</a></li>
                
                        <{if $smarty.session.user.kind === 1}>          
                            <li class="nav_style"><a href="user.php" class="nav-link ">管理員</a></li>
                            <li class="nav_style"><a href="page_sw.php?op=logout&pageid=6" class="nav-link">Logout</a></li>   
                        <{elseif  $smarty.session.user.kind === 0}> 
                            <li class="nav_style"><a href="page_sw.php?op=logout&pageid=6" class="nav-link">Logout</a></li>                   
                        <{else}>
                            <li class="nav_style"><a href="page_sw.php?op=op_list&pageid=6" id="userin" class="nav-link">Login</a></li>                     
                        <{/if}>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>

