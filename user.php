<?php
/* 引入檔頭，每支程都會引入 */
require_once 'head.php';
  
/* 過濾變數，設定預設值 */
$op = system_CleanVars($_REQUEST, 'op', 'op_form', 'string');
$sn = system_CleanVars($_REQUEST, 'sn', '', 'int');
  
/* 程式流程 */
switch ($op){
  case "op_form" :
    $msg = op_form();
    break;
  
  case "login" :
    $msg = login();
    exit;
  
  case "logout":
    $msg = logout();  
    exit;

  default:
    $op = "op_list";
    op_list();
    break;  
}
  
/*---- 將變數送至樣版----*/
$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op);
  
$smarty->display('user.tpl');
  
/*---- 函數區-----*/
function op_form(){
  global $smarty;
 
}

function logout(){
  $_SESSION['admin'] = false;
  setcookie('name','',time() - 3600 * 24 * 365);
  setcookie('token','',time() - 3600 * 24 * 365);

  header("location:index.php");
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

function op_list(){
  global $smarty;
}


