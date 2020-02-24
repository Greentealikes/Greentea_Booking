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
  
#頁面轉換使用
$switch_id = isset($_GET['pageid'])? $_GET['pageid'] : '6';
$switch_bookpage = isset($_GET['bookpage'])? $_GET['bookpage'] : '0';




  /*---- 必須引入----*/
  #引入樣板引擎
  require_once _WEB_PATH.'/smarty.php';
  #引入資料庫設定
  require_once _WEB_PATH . '/templates/php/sqlConfig.php';
  #引入設定檔
  require_once _WEB_PATH . '/templates/php/function.php';
  #視窗畫面設定檔
  require_once _WEB_PATH . '/templates/php/redirect.php';

  $_SESSION['user']['kind'] = isset($_SESSION['user']['kind']) ? $_SESSION['user']['kind'] : "";

# 為了cookie使用
if($_SESSION['user']['kind'] === ""){
  $_COOKIE['token'] = isset($_COOKIE['token']) ? $_COOKIE['token'] : "";
  $_COOKIE['uname'] = isset($_COOKIE['uname']) ? $_COOKIE['uname'] : "";
  
  $_COOKIE['uname'] = db_filter($_COOKIE['uname'], '');
  $_COOKIE['token'] = db_filter($_COOKIE['token'], '');

  if($_COOKIE['uname'] && $_COOKIE['token']){
    $sql="SELECT *
        FROM `users`
        WHERE `uname` = '{$_COOKIE['uname']}'";

    $result = $db->query($sql);
    $row = $result->fetch_assoc();

    if($_COOKIE['token'] === $row['token']){
      
      $row['uname'] = htmlspecialchars($row['uname']);//字串
      $row['uid'] = (int)$row['uid'];//整數
      $row['kind'] = (int)$row['kind'];//整數
      $row['name'] = htmlspecialchars($row['name']);//字串
      $row['tel'] = htmlspecialchars($row['tel']);//字串
      $row['email'] = htmlspecialchars($row['email']);//字串 
      $row['pass'] = htmlspecialchars($row['pass']);//字串 
      $row['token'] = htmlspecialchars($row['token']);//字串
      
      $_SESSION['user']['uid'] = $row['uid'];
      $_SESSION['user']['uname'] = $row['uname'];
      $_SESSION['user']['name'] = $row['name'];
      $_SESSION['user']['tel'] = $row['tel'];
      $_SESSION['user']['email'] = $row['email'];
      $_SESSION['user']['kind'] = $row['kind'];
    }
  }   
}

?>