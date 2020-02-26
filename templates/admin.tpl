<!doctype html>
<html lang="en">
  <head>
    <title>Approach &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<{$xoImgUrl}>fonts/googleapis.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<{$xoImgUrl}>css/bootstrap.min.css">    
    <link rel="stylesheet" href="<{$xoImgUrl}>css/jquery.fancybox.min.css">
 
    <link rel="stylesheet" href="<{$xoImgUrl}>fonts/flaticon/font/flaticon.css">
   
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<{$xoImgUrl}>css/style.css">
    <link rel="stylesheet" href="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.css"> 
    <link href="<{$xoImgUrl}>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<{$xoImgUrl}>css/backstage.css">
  </head>
      
<body>
  <div contenteditable="true" class="text effect01 title_content">Greentea 後台</div> 
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">管理員</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" 
                href="index.php" id="Back_home">首頁
              <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link "  
                href="user.php" >會員管理</a>
            </li>
            <li class="nav-item">
              <a class="nav-link "
                href="userbook.php?book=book_list">定房管理</a>   
            </li>
            
            <li class="nav-item">
              <a class="nav-link " 
                href="http://127.0.0.1/phpmyadmin/index.php" target="_blank">資料庫管理</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active"
                href="page_sw.php?op=logout&pageid=6" id="user_out">登出</a>
            </li>
           
          </ul>
        </div>
      </nav>

      <div class="col-sm-12 form_content">
        <{if $WEB.file_name == "user.php"}>
            <{include file="tpl/admin_member_form.tpl"}>
        <{elseif  $WEB.file_name == "userbook.php"}>
           <{include file="tpl/admin_book_form.tpl"}>
        <{/if}>
      </div>
    </div>
  </div>
</body>

</html>

<script src="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.js"></script>

<{* 引入js檔案 *}>
<{include file="tpl/head_js.tpl"}>

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

