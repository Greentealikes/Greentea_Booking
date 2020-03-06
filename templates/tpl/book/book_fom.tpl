<div class="carousel-inner">
  <div class="carousel-item active branch_logoimg">
    <img src="<{$xoImgUrl}>image/about_banner.jpg" class="d-block w-100 " alt="...">
  </div>    
</div>

<{if $bookpage == 2}>
  <{include file="tpl/book/bookpg2_form.tpl"}>
<{elseif $bookpage == 3}>  
  <{include file="tpl/book/bookpg3_form.tpl"}> 
<{elseif $bookpage == 4}>  
  <{include file="tpl/book/bookpg4_form.tpl"}> 
<{else}>
  <{include file="tpl/book/bookpg1_form.tpl"}>    
<{/if}>








 

