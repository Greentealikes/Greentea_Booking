<!doctype html>
<html lang="en">
  <head>
    <title>Approach &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<{$xoImgUrl}>fonts/googleapis.css" rel="stylesheet">
    <link rel="stylesheet" href="<{$xoImgUrl}>fonts/icomoon/style.css">
    <link rel="stylesheet" href="<{$xoImgUrl}>css/bootstrap.min.css">    
    <link rel="stylesheet" href="<{$xoImgUrl}>css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<{$xoImgUrl}>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<{$xoImgUrl}>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<{$xoImgUrl}>fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<{$xoImgUrl}>css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<{$xoImgUrl}>css/style.css">
    <link rel="stylesheet" href="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.css"> 
 <link href="<{$xoImgUrl}>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  </head>
 
    <style>
        .form-signin {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: 0 auto;
        }      
    </style>      
<body>

  <h1 class="text-center mt-4">Greentea 後台</h1>
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <{if $WEB.file_name == "user.php"}>
          <{include file="tpl/admin_table_form.tpl"}>
        <{/if}>
      </div>
      <div class="col-sm-3">
        <div class="card text-white bg-secondary mb-3" style="width: 18rem;">
          <div class="card-header ">管理員</div>
            <div class="list-group">
              <a class="list-group-item list-group-item-action list-group-item-dark" href="index.php" id="Back_home">首頁</a>         
              <a class="list-group-item list-group-item-action list-group-item-dark" href="page_sw.php?op=logout&pageid=6" id="user_out">登出</a>
              <a class="list-group-item list-group-item-action list-group-item-dark" 
              href="http://127.0.0.1/phpmyadmin/index.php" target="_blank">資料庫管理</a>
            </div>
          </div>
        </div>
      </div>     
    </div>
  </div>
</body>

</html>

<script src="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.js"></script>

<{if $redirect}>
  <script>
    window.onload = function(){
      Swal.fire({
        icon: 'success',
        title: "<{$message}>",
        showConfirmButton: false,
        timer: <{$time}>
      })
    }
  </script>
<{/if}>

