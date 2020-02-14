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
        <{if $smarty.session.admin}>
		        <{include file="tpl/admin_form.tpl"}>
	      <{else}>
            <{if $op == login_form}>
            		<{include file="tpl/login_form.tpl"}>
            <{elseif $op == reg_form}>
                <{include file="tpl/reg_form.tpl"}>
            <{/if}>
        <{/if}> 
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

