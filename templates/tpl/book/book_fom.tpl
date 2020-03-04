<div class = "logoimage" >     
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner ">
      <div class="carousel-item active branch_logoimg">
        <img src="<{$xoImgUrl}>images/bn01.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<{$xoImgUrl}>images/bn02.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<{$xoImgUrl}>images/bn03.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<{$xoImgUrl}>images/bn04.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<{$xoImgUrl}>images/bn05.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<{$xoImgUrl}>images/bn06.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item branch_logoimg">
        <img src="<{$xoImgUrl}>images/bn07.jpg" class="d-block w-100 " alt="...">
      </div>
    </div>
  </div>
</div>
<div class="Marquee-alert">
  <marquee behavior="behavior" width="100%" loop="2">
  歡迎來客訪問，如要線上預訂，可線上填單或是直接電話來電09-xxx-xx-xxx
  </marquee>
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








 

