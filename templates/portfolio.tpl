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
  <link rel="stylesheet" href="<{$xoImgUrl}>booking/booking_style.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<{$xoImgUrl}>css/style.css">

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


            <span class="d-inline-block d-lg-none"><a href="#"
                class="text-primary site-menu-toggle js-menu-toggle py-5"><span
                  class="icon-menu h3 text-primary"></span></a></span>



            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
           
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="switch.php?pageid=1" class="nav-link">About</a></li>
                  <li><a href="switch.php?pageid=2" class="nav-link">Portfolio</a></li>
                  <li><a href="switch.php?pageid=3" class="nav-link">Services</a></li>
                  <li><a href="switch.php?pageid=4" class="nav-link">Blog</a></li>
                  <li><a href="switch.php?pageid=5" class="nav-link">Contact</a></li>
                   <{if $smarty.session.admin}>
		                   <li><a href="user.php" class="nav-link">管理員</a></li>
                       <li><a href="logout.php" id="userout" class="nav-link">Logout</a></li>
	                <{else}>
		                   <li><a href="user.php" id="userin" class="nav-link">Login</a></li>
	                <{/if}>
            </nav>
          </div>


        </div>
      </div>

     
        <div class = "wrap text-left col-12 " role="alert">
          <div class="alert alert-secondary" >
            <nav class="site-navigation text-left ml-auto d-none d-lg-block" role="navigation">
              <ul class = "site-menu main-menu js-clone-nav ml-auto">
                <li class="booking_nav nab1" >
                  <a href="#" class="nav-link">
                  <b>1</b>
                  <stong>選擇日期</stong>
                  </a>
                </li>
                <li class="booking_nav nab2">
                  <a href="#"  class="nav-link">
                  <b>2</b>
                  <stong>房型選擇</stong>
                  </a>
                </li>
                <li class="booking_nav nab3">
                  <a href="#" class="nav-link">
                  <b>3</b>
                  <stong>確認訂單</stong>
                  </a>
                </li>
                <li class="booking_nav nab4">
                  <a href="#"  class="nav-link">
                  <b>4</b>
                  <stong>訂單完成</stong>
                  </a>
                </li>
            </ul>
        </div>
      </div>
    </header>


    <div class="site-section-cover">
      <div class="container">
        <div class="row align-items-center text-center justify-content-center">
          <div class="col-lg-7">
            <h1 class="text-white mb-4">Our Portfolio</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit maxime nemo placeat dolor est.</p>

          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid portfolio-wrap bg-light pt-0 site-section">
      <div class="row align-items-end mb-4">
        <div class="col-md-3">
          <a href="portfolio-single.html" class="portfolio-item"><img src="<{$xoImgUrl}>images/img_1.jpg" alt="Image"
              class="img-fluid"></a>
        </div>
        <div class="col-md-6">
          <a href="portfolio-single.html" class="portfolio-item"><img src="<{$xoImgUrl}>images/img_2.jpg" alt="Image"
              class="img-fluid"></a>
        </div>
        <div class="col-md-3">
          <a href="portfolio-single.html" class="portfolio-item"><img src="<{$xoImgUrl}>images/img_3.jpg" alt="Image"
              class="img-fluid"></a>
        </div>
      </div>
      <div class="row align-items-start">
        <div class="col-md-4">
          <a href="portfolio-single.html" class="portfolio-item"><img src="<{$xoImgUrl}>images/img_2.jpg" alt="Image"
              class="img-fluid"></a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-single.html" class="portfolio-item"><img src="<{$xoImgUrl}>images/hero_1.jpg" alt="Image"
              class="img-fluid"></a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-single.html" class="portfolio-item"><img src="<{$xoImgUrl}>images/hero_3.jpg" alt="Image"
              class="img-fluid"></a>
        </div>
      </div>
    </div>




    <div class="site-section bg-white">

      <div class="container">
        <div class="row mb-5 text-center">
          <div class="col">
            <h2 class="text-primary font-weight-bold">Our Clients</h2>
          </div>
        </div>
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