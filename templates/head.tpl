<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,900|Source+Serif+Pro&display=swap" rel="stylesheet">
     <title><{$WEB.web_title}></title>

    <link rel="stylesheet" href="<{$xoImgUrl}>fonts/icomoon/style.css">
   
    <link rel="stylesheet" href="<{$xoImgUrl}>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<{$xoImgUrl}>css/jquery.fancybox.min.css">   
    <link rel="stylesheet" href="<{$xoImgUrl}>css/owl.theme.default.min.css">
    
    <link rel="stylesheet" href="<{$xoImgUrl}>css/aos.css">   
    
    <link rel="stylesheet" href="<{$xoImgUrl}>css/selfstyle.css">
    <link href="<{$xoImgUrl}>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<{$xoImgUrl}>css/menu_style.css">
      
    <link rel="icon" href="<{$xoImgUrl}>image/favicon.png" type="image/png">      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<{$xoImgUrl}>css/bootstrap.min.css">
    <link rel="stylesheet" href="<{$xoImgUrl}>vendor/linericon/style.css">   
    <link rel="stylesheet" href="<{$xoImgUrl}>css/owl.carousel.min.css">
  
    <link rel="stylesheet" href="<{$xoImgUrl}>vendor/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<{$xoImgUrl}>vendor/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="<{$xoImgUrl}>css/style.css">
    <link rel="stylesheet" href="<{$xoImgUrl}>css/responsive.css">
   
  </head>
  

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">  
  
    <!-- 導覽頁面 -->   
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                   <a class="navbar-brand logo_h" href="index.php"><img src="<{$xoImgUrl}>image/Logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">

                        <{if $mainMenus}>
                            <{foreach $mainMenus as $mainMenu}>
                            <li class="nav-item submenu dropdown">
                                <a href="<{$mainMenu.url}>" <{if $mainMenu.target == 1}> target ="_blank"<{/if}> class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><{$mainMenu.title}></a>
                                <ul class="dropdown-menu">
                                    <{foreach $secMenus as $secMenu}>
                                        <{if $mainMenu.ofsn ==  $secMenu.ofsn}>
                                            <li class="nav-item"><a class="nav-link" href="<{$mainMenu.url}>?<{$secMenu.url}>" <{if $secMenu.target == 1}> target ="_blank"<{/if}> ><{$secMenu.title}></a></li>       
                                        <{/if}>
                                    <{/foreach}>
                                </ul>
                            </li> 
                            <{/foreach}>
                        <{/if}>

                        <!-- about.php?op=about_into -->  

                             <li class="nav-item submenu dropdown">
                                <a href="services.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">民宿服務</a>
                                <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="services.php">房型介紹</a></li>                           
                                <li class="nav-item"><a class="nav-link" href="services.php?op=checkin_info">入住資訊</a></li> 
                                </ul>
                            </li>        
                          
                            
                            <li class="nav-item submenu dropdown">
                                <a href="Onbooking.php?book=booking_form" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">線上預訂</a>
                                <ul class="dropdown-menu">                                  
                                    <li class="nav-item"><a class="nav-link" href="Onbooking.php?book=booking_form">住宿預定</a></li>                               
                                    <li class="nav-item"><a class="nav-link" href="Onbooking.php?book=booking_query_form&using=no">住宿查詢</a></li>
                                </ul>
                            </li>

                            <{if $smarty.session.user.kind === 1}>          
                                <li class="nav-item"><a href="user.php" class="nav-link">管理員</a></li>
                                <li class="nav-item"><a href="login.php?op=logout&pageid=6" class="nav-link">Logout</a></li>   
                            <{elseif  $smarty.session.user.kind === 0}> 
                                <li class="nav-item"><a href="login.php?op=logout&pageid=6" class="nav-link">Logout</a></li>                   
                            <{else}>
                                <li class="nav-item"><a href="login.php?op=op_list&pageid=6" id="userin" class="nav-link">Login</a></li>                     
                            <{/if}> 
                        </ul>
                    </div> 
                </nav>
            </div>  
        </header>

<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h6>Away from monotonous life in Redtea Hotel</h6>
                <h2>Your best choice</h2>
                <p>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as $.17 each.</p>
                <a href="Onbooking.php" class="btn theme_btn button_hover">Book Now</a>
            </div>
        </div>
    </div>    
</section>

        
 
     
  

