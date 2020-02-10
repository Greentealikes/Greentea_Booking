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
              <div class="site-mobile-menu-body"></div>
          </div>

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
                              <li class="nav_active"><a href="switch.php?pageid=1" class="nav-link">About</a></li>
                              <li><a href="switch.php?pageid=2" class="nav-link">Portfolio</a></li>
                              <li><a href="switch.php?pageid=3" class="nav-link">Services</a></li>
                              <li><a href="switch.php?pageid=4" class="nav-link">Blog</a></li>
                              <li><a href="switch.php?pageid=5" class="nav-link">Contact</a></li>
                  
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

          <div class = "logoimage">               
              <img src="<{$xoImgUrl}>images/logoimg.jpg" alt="Image" class="img-fluid"></a>
          </div>   
            <div class="site-section ">
              <div class="site-bottom">製作中</div>
          </div>   

          <div class="site-section">
               <div class="row">
                  <div class = "col-3">   
                     <div class="list-group" id="list-tab" role="tablist">
                           <a href = "switch.php?pageid=2&bookpage=1">
                            <li class="list-group-item btn-hold"><stong>線上預訂說明</stong></li>
                          </a>
                          <a href = "switch.php?pageid=2&bookpage=2">
                            <li class="list-group-item "><stong>房型選擇</stong></li>
                          </a>

                          <a href = "switch.php?pageid=2&bookpage=3">
                            <li class="list-group-item"><stong>資料填寫</stong></li>
                          </a>

                          <a href = "switch.php?pageid=2&bookpage=4">
                            <li class="list-group-item"><stong>最後確認</stong></li>
                          </a>
                      </div>
                   </div>  
                  <div class = "col-9">   
                      <form action="user.php" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
                          <div class="book-container alert alert-warning  ">
                            <div class = "book-body">
                              <div class = "row">
                                  <div class="col-sm-12 book-header">
                                      線上預訂說明
                                  </div>
                                  <div class = "col-sm-12 text-center book-description">
                                      <div>歡迎透過下列表單向民宿管家確認住宿日期及房型。</div>
                                      <div>填寫表單後不代表預約成功，民宿管家將再透過電話或email與您聯絡</div>
                                      <div>若24小時內未接到我們的聯絡電話，請主動與我們聯絡，不便之處敬請見諒!</div> 
                                      <div>成功預約後，請於3日內完成訂金匯款，完成匯款後請透過電話告知 09xx-xxx-xxx 。</div>
                                  </div>
                                   
                              </div>
                              <div class="text-center pb-20">
                                  <p></p>
                                  <input type="hidden" name="op" value="reg">
                                  <button type="submit" class="btn btn-primary ">下一步</button>
                                  <p></p>
                              </div>
                             
                               
                          </div>
                      </form>
                   </div>
               </div>
          </div>

    <div class="footer site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="site-logo-footer">
              <a href="../index.php">Approach</a>
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

    <div class="site-section bg-light">
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
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>



  </div>

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

</body>

</html>