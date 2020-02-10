<?php
/* 引入檔頭，每支程都會引入 */
require_once 'head.php';
  
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
    exit;
  
  case "logout":
    $msg = logout(); 
    header("location:index.php"); 
    exit;
  case "reg":
    $msg = reg();
    //if($msg != '0')
      //alert("註冊登入成功");
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
  
/*---- op管理員-----*/
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
  else
    $_POST['pass'] = password_hash($_POST['chk_pass'], PASSWORD_DEFAULT);

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

function logout(){
  $_SESSION['admin'] = false;
  setcookie('name','',time() - 3600 * 24 * 365);
  setcookie('token','',time() - 3600 * 24 * 365);  
}

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
    $smarty->display('user.tpl');
  }
  else{                                     
    header("location:user.php");
  }
}




