<?php
/* 引入檔頭，每支程都會引入 */
require_once 'head.php';

/* 過濾變數，設定預設值 */
$op = system_CleanVars($_REQUEST, 'op', 'op_list', 'string');
$uid = system_CleanVars($_REQUEST, 'uid', '', 'int');

if($_SESSION['user']['kind'] !== 1)redirect_header("index.php", '您沒有權限', 3000,0);
  
/* 程式流程 */
switch ($op){

  case "op_delete" :
    $msg = op_delete($uid);
    redirect_header("user.php", $msg, 3000,1);
    exit;

  case "op_update":
    $msg = op_update($uid);  
    redirect_header("user.php",$msg, 3000, 1);    
    exit;

  case 'op_form':
    $msg = op_form($uid);     
  break;
  
  default:  
    $op = "op_list"; 
    op_list();
    break;  
}

/*---- 將變數送至樣版----*/
$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op);

$smarty->display('admin.tpl');

function op_list(){
  global $smarty,$db;
  
  $sql = "SELECT * FROM `users`";
  
  $result = $db->query($sql) or die($db->error() . $sql);
  $rows=[];//array();
  while($row = $result->fetch_assoc()){
    $row['uid'] = $row['uid'];//整數
    $row['uname'] = htmlspecialchars($row['uname']);//字串
    $row['pass'] = htmlspecialchars($row['pass']);//字串
    $row['name'] = htmlspecialchars($row['name']);//字串
    $row['tel'] = htmlspecialchars($row['tel']);//字串
    $row['email'] = htmlspecialchars($row['email']);//字串    
    $row['kind'] = (int)$row['kind'];//整數
    $rows[] = $row;
  }

  $smarty->assign("rows",$rows);  
}

function op_delete($uid){
  global $db; 
  global $db;
  $sql="DELETE FROM `users`
        WHERE `uid` = '{$uid}';
  ";
  $db->query($sql) or die($db->error() . $sql);
  return "會員刪除成功";
}


function op_update($uid=""){
  global $db;
  //更新
    #過濾變數
    $_POST['uname'] = db_filter($_POST['uname'],'帳號');
    $_POST['pass'] = db_filter($_POST['pass'],'');
    $_POST['name'] = db_filter($_POST['name'],'姓名');
    $_POST['tel'] = db_filter($_POST['tel'],'電話');
    $_POST['email'] = db_filter($_POST['email'],'email',FILTER_SANITIZE_EMAIL);
    $_POST['kind'] = db_filter($_POST['kind'],'會員狀態');

    $and_col = "";
    if($_POST['pass']){
      $_POST['pass'] = password_hash($_POST['pass'],PASSWORD_DEFAULT);
      //更新密碼
      $and_col = "`pass` = '{$_POST['pass']}',";
    }
    $sql = "UPDATE `users` SET 
            `uname` = '{$_POST['uname']}',
            {$and_col}
            `name` = '{$_POST['name']}',
            `tel` = '{$_POST['tel']}',
            `email` = '{$_POST['email']}',
            `kind` = '{$_POST['kind']}'
            WHERE `users`.`uid` = '{$uid}'";    
    $db->query($sql) or die($db->error().$sql);
    return '資料密碼更改成功';
}

function op_form($uid=""){
  global $smarty,$db;

  if($uid){
    $sql="SELECT *
          FROM `users`
          WHERE `uid` = '{$uid}'
    ";//die($sql);
    
    $result = $db->query($sql) or die($db->error() . $sql);
    $row = $result->fetch_assoc(); 
  }
    
  $row['uid'] = isset($row['uid']) ? $row['uid'] : "";
  $row['uname'] = isset($row['uname']) ? $row['uname'] : "";
  $row['name'] = isset($row['name']) ? $row['name'] : "";
  $row['tel'] = isset($row['tel']) ? $row['tel'] : "";
  $row['email'] = isset($row['email']) ? $row['email'] : "";
  $row['kind'] = isset($row['kind']) ? $row['kind'] : "0"; 
  
  $smarty->assign("row",$row);
 
}

/*---返回登入表單---*/
function login_form(){
  global $smarty;
}






