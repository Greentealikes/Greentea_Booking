<?php
require_once 'head.php';

/* 過濾變數，設定預設值 */
$op = system_CleanVars($_REQUEST, 'op', 'parch_index', 'string');
$sn = system_CleanVars($_REQUEST, 'sn', '', 'int');

#主畫面切換變數
$switch_id = isset($_GET['pageid'])? $_GET['pageid'] : '7';

/* 程式流程 */
switch ($op){
  case "gourmets" :
    $op = "gourmets"; 
  break;  

  case "wreawool" :
    $op = "wreawool";      
  break; 

  case "contact_form":
    $op = "contact_form";
  break;
  
  default:
    $op = "parch_index";
  break;  
}


/*---- 將變數送至樣版----*/
$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op);

$smarty->assign("pageid", $switch_id);

/*---- 程式結尾-----*/
$smarty->display('theme.tpl');

//註冊函數(寫入資料庫)
function reg(){
  global $db;
  
//#過濾變數
//$db->real_escape_string() 寫在function.php
$_POST['uname'] = db_filter($_POST['uname'],'帳號');
$_POST['pass'] = db_filter($_POST['pass'],'密碼');
$_POST['chk_pass'] = db_filter($_POST['chk_pass'],'確認密碼');
$_POST['name'] = db_filter($_POST['name'],'姓名');
$_POST['tel'] = db_filter($_POST['tel'],'電話');
$_POST['email'] = db_filter($_POST['email'],'電郵',FILTER_SANITIZE_EMAIL);


if($_POST['pass'] !=$_POST['chk_pass']){
 redirect_header("index.php?op=reg_form","密碼不一致");
exit;} 
#加密處理
$_POST['pass'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$_POST['token'] = password_hash($_POST['uname'], PASSWORD_DEFAULT);

 $sql="INSERT INTO `users` (`uname`,`pass`,`name`,`tel`,`email`,`token`)
 VALUES('{$_POST['uname']}', '{$_POST['pass']}', '{$_POST['name']}', '{$_POST['tel']}', '{$_POST['email']}', '{$_POST['token']}');";
#寫入資料庫
 $db->query($sql) or die($db->error(). $sql); 
 $uid = $db->insert_id;  
}  

function login(){
  global $db;
#過濾變數
  $_POST['uname'] = db_filter($_POST['uname'],'帳號');
  $_POST['pass'] = db_filter($_POST['pass'],'密碼');

  $sql="SELECT * 
        FROM `users`#從資料夾users撈資料
        WHERE `uname` = '{$_POST['uname']}' #撈帳號
       ";
  $result = $db->query($sql) or die($db->error() . $sql);
    #

  $row = $result->fetch_assoc() or redirect_header("index.php","帳號輸入錯誤",1000);
    #變數row取 sql 

    $row['uname'] = htmlspecialchars($row['uname']);  //濾成字串
    $row['uid'] = (int)$row['uid'];  //濾成整數
    $row['kind'] = (int)$row['kind'];  //濾成整數
    $row['name'] = htmlspecialchars($row['name']);  //濾成字串
    $row['tel'] = htmlspecialchars($row['tel']);  //濾成字串
    $row['email'] = htmlspecialchars($row['email']);
    $row['pass'] = htmlspecialchars($row['pass']);  //濾成字串
    $row['token'] = htmlspecialchars($row['token']);

  if(password_verify($_POST['pass'],$row['pass'])){ //判斷明碼加密後密碼正確
    //登入成功
    $_SESSION['user']['uid'] = $row['uid'];
    $_SESSION['user']['uname'] = $row['uname'];
    $_SESSION['user']['name'] = $row['name'];
    $_SESSION['user']['tel'] = $row['tel'];
    $_SESSION['user']['email'] = $row['email'];
    $_SESSION['user']['kind'] = $row['kind'];//1 管理 0 會員 ""訪客
 
    $_POST['remember'] = isset($_POST['remember']) ? $_POST['remember'] :"";

    if($_POST['remember']){
      setcookie("uname", $row['uname'], time()+3600*24*365); 
      setcookie("token", $row['token'], time()+3600*24*365);    
    }
    //header("location:index.php");//注意前面不可以有輸出
    return "登入成功";
  }else{ //帳號密碼不對 清空session
    $_SESSION['user']['uid'] = "";
    $_SESSION['user']['uname'] = "";
    $_SESSION['user']['name'] = "";
    $_SESSION['user']['tel'] = "";
    $_SESSION['user']['email'] = "";
    $_SESSION['user']['kind'] = "";

    return "登入失敗";
  }
}

function logout(){
   //帳號密碼不對 清空session cookie 
   $_SESSION['user']['uid'] = "";
   $_SESSION['user']['uname'] = "";
   $_SESSION['user']['name'] = "";
   $_SESSION['user']['tel'] = "";
   $_SESSION['user']['email'] = "";
   $_SESSION['user']['kind'] = "";

  setcookie("uname", "", time()-3600*24*365); 
  setcookie("token", "", time()-3600*24*365);
}



 