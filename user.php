<?php
/* 引入檔頭，每支程都會引入 */
require_once 'head.php';
require_once 'redirect.php';
  
/* 過濾變數，設定預設值 */
$op = system_CleanVars($_REQUEST, 'op', 'login_form', 'string');
$sn = system_CleanVars($_REQUEST, 'sn', '', 'int');
  
/* 程式流程 */
switch ($op){
  case "reg_form" :
    $msg = reg_form();
    break;
  
  case "login" :   
    $msg = login();
    if($msg == '登入成功')
      redirect_header("switch.php",$msg, 3000);
    else
    redirect_header("user.php", $msg, 3000);     
    exit;
  
  case "logout":
    $msg = logout();  
    redirect_header("user.php", '登出', 3000);
    exit;
  case "reg":
    $msg = reg();
    header("location:index.php"); 
    exit;

  default:
    $op = "login_form";
    login_form();
    break;  
}
  
/*---- 將變數送至樣版----*/
$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op);
$smarty->display('user.tpl');
  
#動畫視窗
function redirect_header($url, $message, $time) {
  $_SESSION['redirect'] = true;
  $_SESSION['message'] = $message;
  $_SESSION['time'] = $time;
  header("location:{$url}");
  exit;
}

function reg_form(){
  global $smarty;
}

function reg(){
  global $db;
  #過濾變數
  $_POST['uname'] = $db->real_escape_string($_POST['uname']);
  $_POST['pass'] = $db->real_escape_string($_POST['pass']);
  $_POST['chk_pass'] = $db->real_escape_string($_POST['chk_pass']);
  $_POST['name'] = $db->real_escape_string($_POST['name']);
  $_POST['tel'] = $db->real_escape_string($_POST['tel']);
  $_POST['email'] = $db->real_escape_string($_POST['email']);
  
  #寫入語法
  if( $_POST['pass'] !=  $_POST['chk_pass']) 
  {
    die("密碼不一致");
  }
  else{
    $_POST['pass'] = password_hash($_POST['chk_pass'], PASSWORD_DEFAULT);
  }
    $sql="INSERT INTO `users` 
        (`uname`, `pass`, `username`, `tel`, `email`,`kind`,`token`)  
        VALUES 
        ('{$_POST['uname']}', '{$_POST['pass']}', '{$_POST['name']}', '{$_POST['tel']}', '{$_POST['email']}','{0}','{xxxxxx}');
  ";
  #寫入資料庫
  $db->query($sql) or die($db->error. $sql);
  $uid = $db->insert_id;
  return $uid;
}
/*---返回登入表單---*/
function login_form(){
  global $smarty;
}

#使用者登出
function logout(){
  $_SESSION['admin'] = false;
  setcookie('name','',time() - 3600 * 24 * 365);
  setcookie('token','',time() - 3600 * 24 * 365);  
}

#使用者登入
function login(){
  global $smarty;
  $name = 'admin';
  $pass = '111111';
  $token = 'xxxxxx';

  /*---分為後台模式,訪客模式---*/
  if ($name == $_POST['name'] && $pass == $_POST['pass']){ 
    $_SESSION['admin'] = true;  
    
    if($_POST['remember'] = isset($_POST['remember'])? $_POST['remember']: ''){
      setcookie('name',$name,time() +3600 * 24 * 365);
      setcookie('token',$token,time() +3600 * 24 * 365);
    }
    return '登入成功';
  }
  else{                                     
    return '登入失敗';
  }
}




