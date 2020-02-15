
 <!-- 導覽頁面 -->
<div class = "header fixed-top">
    <header class="site-navbar site-navbar-target" role="banner">
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
                
                <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto ">
                        <li class="nav_active"><a href="page_sw.php?pageid=1" class="nav-link">關於我們</a></li>
                        <li><a href="page_sw.php?pageid=2&bookpage=1" class="nav-link">線上預訂</a></li>
                        <li><a href="page_sw.php?pageid=3" class="nav-link">服務</a></li>
                        <li><a href="page_sw.php?pageid=4" class="nav-link">周邊活動</a></li>
                        <li><a href="page_sw.php?pageid=5" class="nav-link">聯繫我們</a></li>
            
                    <{if $smarty.session.admin}>
                        <li><a href="user.php" class="nav-link">管理員</a></li>
                        <li><a href="page_sw.php?op=logout&pageid=6" class="nav-link">Logout</a></li>                     
                    <{else}>
                        <li><a href="page_sw.php?op=op_list&pageid=6" id="userin" class="nav-link">Login</a></li>                     
                    <{/if}>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>