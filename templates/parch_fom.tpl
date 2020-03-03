<head>
<title>Creative - Start Bootstrap Theme</title>
<!-- Font Awesome Icons -->
<link href="<{$xoImgUrl}>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Plugin CSS -->
<link href="<{$xoImgUrl}>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

<link href="<{$xoImgUrl}>css/creative.min.css" rel="stylesheet">

<{include file="tpl/head_js.tpl"}>
</head>

<{if  $op == "wreawool"}> 
    <{include file="tpl/parch/parch_wreawool.tpl"}>

<{elseif  $op == "gourmets"}> 
    <{include file="tpl/parch/parch_gourmets.tpl"}>  

<{elseif $op == "contact_form"}> 
    <{include file="tpl/parch/parch_contact.tpl"}>  

<{else}> 
    <{include file="tpl/parch/parch_index.tpl"}>

<{/if}> 







 
