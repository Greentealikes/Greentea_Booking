<!doctype html>
<html lang="en">

    <!--  導覽頁面&css  -->
    <{include file="head.tpl"}>
    
    <!-- 點選導覽頁面切換內容 -->
    <{if $pageid == 0 }>
      <{include file="tpl/index/index_fom.tpl"}>
    <{elseif $pageid == 1}>
      <{include file="tpl/about/about_fom.tpl"}>
    <{elseif $pageid == 2}>
      <{include file="book_fom.tpl"}>
    <{elseif $pageid == 3}>
      <{include file="tpl/services/services_fom.tpl"}>
    <{elseif $pageid == 4}>
      <{include file="tpl/blog/blog_fom.tpl"}>
    <{elseif $pageid == 5}>
      <{include file="tpl/contact/contact_fom.tpl"}>
    <{elseif $pageid == 6}>

      <{if $smarty.session.user.kind === 1}>          
        <{include file="tpl/admin_form.tpl"}>
      <{else}>
        <{if $op == reg_form}>
          <{include file="tpl/reg_form.tpl"}>     
        <{else}>
          <{include file="tpl/login_form.tpl"}>
        <{/if}>
      <{/if}>
    <{/if}>


  <!-- 頁尾畫面 -->
  <{include file="footer.tpl"}>  

  </body>
</html> 

<{* 引入js檔案 *}>
<{include file="tpl/head_js.tpl"}>
  






