<?php
    require_once 'head.php';
    require_once 'redirect.php';
    
    #主畫面切換 
    $switch_id = isset($_GET['pageid'])? $_GET['pageid'] : '0';

    #線上預訂頁切換
    $switch_bookpage = isset($_GET['bookpage'])? $_GET['bookpage'] : '0';
    
    #admin
    $admin = $_SESSION['admin'];
   
    $smarty->assign("pageid", $switch_id);
    $smarty->assign("bookpage", $switch_bookpage);

    if(isset($_GET['bookpage']))
        $smarty->display('book_fom.tpl');
    else 
       $smarty->display('theme.tpl');
?>
