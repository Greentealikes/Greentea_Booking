<?php 
   session_start(); //啟用 $_SESSION,前面不可以有輸出
   error_reporting(E_ALL);@ini_set('display_errors', true); //設定所有錯誤都顯示
   $http = 'http://';
   if (!empty($_SERVER['HTTPS'])) {
     $http = ($_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
   }

   define('_WEB_PATH', str_replace("\\", "/", dirname(__FILE__)));
   define('_WEB_URL', $http . $_SERVER["HTTP_HOST"] . str_replace($_SERVER["DOCUMENT_ROOT"], "", _WEB_PATH));
    

   $WEB['file_name'] = basename($_SERVER['PHP_SELF']); //index.php
   
   $_SESSION['admin'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : false;

   if(!$_SESSION['admin']){
      $_COOKIE['token'] = isset($_COOKIE['token']) ? $_COOKIE['token'] : "";
      $_COOKIE['name'] = isset($_COOKIE['name']) ? $_COOKIE['name'] : "";
      if($_COOKIE['name'] == "admin" and $_COOKIE['token'] == "xxxxxx"){
        $_SESSION['admin'] = true;
    }
  }
    $switch_id = isset($_GET['pageid'])? $_GET['pageid'] : '0';
    $_SESSION['bookpage'] = isset($_GET['bookpage'])? $_GET['bookpage'] : '0';
    
   
    /*---- 必須引入----*/
    #引入樣板引擎
    require_once _WEB_PATH.'/smarty.php';
    #引入資料庫設定
    require_once _WEB_PATH.'/sqlConfig.php';
    #引入設定檔
    require_once _WEB_PATH . '/function.php';
   
?>