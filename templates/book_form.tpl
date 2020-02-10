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
 
     <body>   
        <{if $smarty.session.bookpage == 1 }>
		    <{include file="tpl/bookpg1_form.tpl"}>
	    <{elseif $smarty.session.bookpage == 2}>
		    <{include file="tpl/bookpg2_form.tpl"}>
        <{elseif $smarty.session.bookpage == 3}>  
            <{include file="tpl/bookpg3_form.tpl"}> 
        <{elseif $smarty.session.bookpage == 4}>  
            <{include file="tpl/bookpg4_form.tpl"}> 
        <{else}>
            <{include file="tpl/bookpg1_form.tpl"}>    
	    <{/if}>

  </body>
</html>