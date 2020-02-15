<?php
/* 引入檔頭，每支程都會引入 */
require_once 'head.php';
require_once 'templates/php/redirect.php';
  
/* 過濾變數，設定預設值 */
$op = system_CleanVars($_REQUEST, 'op', 'op_list', 'string');
$sn = system_CleanVars($_REQUEST, 'sn', '', 'int');
  
/* 程式流程 */
switch ($op){
  default:  
    $op = "op_list"; 
    op_list();
    break;  
}
/*---- 將變數送至樣版----*/
$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op);

$smarty->display('user.tpl');

function op_list(){
  global $smarty,$db;
  
  $sql = "SELECT * FROM `users`";
  
  $result = $db->query($sql) or die($db->error() . $sql);
  $rows=[];//array();
  while($row = $result->fetch_assoc()){
    $row['userid'] = $row['userid'];//整數
    $row['uname'] = htmlspecialchars($row['uname']);//字串
    $row['pass'] = htmlspecialchars($row['pass']);//字串
    $row['username'] = htmlspecialchars($row['username']);//字串
    $row['tel'] = htmlspecialchars($row['tel']);//字串
    $row['email'] = htmlspecialchars($row['email']);//字串    
    $row['kind'] = (int)$row['kind'];//整數
    $rows[] = $row;
    
  }

  $smarty->assign("rows",$rows);  
}

/*---返回登入表單---*/
function login_form(){
  global $smarty;
}






