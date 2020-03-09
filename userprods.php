<?php
require_once 'head.php';

#線上預訂行為狀態 
$book = system_CleanVars($_REQUEST, 'book', 'prods_list', 'string');
$sn = system_CleanVars($_REQUEST, 'sn', '', 'int');

if($_SESSION['user']['kind'] !== 1)redirect_header("index.php", '您沒有權限', 3000,0);

switch ($book){
    case "prods_list":
        prods_list();       
    break;

    case "prods_insert_form":
        prods_insert_form();
    break;

    case "prods_update_form":
        prods_update_form($sn);
    break;

    case "prods_update":
        $msg = prods_update($sn);
        redirect_header("userprods.php", $msg, 3000,1);
    exit; 

    case "prods_delete":
        $msg = prods_delete($sn);
        redirect_header("userprods.php", $msg, 3000,1);
    exit;

    case "prods_insert":
        $msg = prods_insert();
        redirect_header("userprods.php", $msg, 3000,1);
    break;
}

$smarty->assign("WEB", $WEB);  
$smarty->assign("book",$book);     
$smarty->display('admin.tpl');


function prods_delete($sn){
    global $db; 
    $sql="DELETE FROM `prods`
          WHERE `sn` = '{$sn}';
    ";
    $db->query($sql) or die($db->error() . $sql);
    return "房型資料刪除成功";
  }

function prods_update($sn=""){
    global $db;

    $_POST['kind_sn'] = $db->real_escape_string($_POST['kind_sn']);
    $_POST['title'] = $db->real_escape_string($_POST['title']);
    $_POST['content'] = $db->real_escape_string($_POST['content']);
    $_POST['enable'] = $db->real_escape_string($_POST['enable']);
        
    $sql = "UPDATE `prods` SET 
            `kind_sn` = '{$_POST['kind_sn']}',                  
            `title` = '{$_POST['title']}',
            `content` = '{$_POST['content']}',
            `enable` = '{$_POST['enable']}'    
            WHERE `prods`.`sn` = '{$sn}'"; 
    

    $db->query($sql) or die($db->error().$sql);
    return '房型資料更改成功';
}

function prods_list(){
    global $smarty,$db;   
   
    $sql = "SELECT * FROM `prods`";
    $result = $db->query($sql) or die($db->error() . $sql);    
    $rows=[];
    while($row = $result->fetch_assoc()){   
        $row['sn'] = (int)($row['sn']);    
        $row['kind_sn'] = htmlspecialchars($row['kind_sn']);
        $row['title'] = htmlspecialchars($row['title']);
        $row['content'] = htmlspecialchars($row['content']);
        $row['enable'] = htmlspecialchars($row['enable']);
        $row['date'] = htmlspecialchars($row['date']);       
        $rows[] = $row;
    }  
    

    $smarty->assign("rows",$rows);  
}

function prods_update_form($sn=""){
    global $smarty,$db;
    if($sn){
      $sql="SELECT *
            FROM `prods`
            WHERE `sn` = '{$sn}'
      ";
      
      $result = $db->query($sql) or die($db->error() . $sql);
      $row = $result->fetch_assoc(); 
    }
   
    $row['sn'] = (int)($row['sn']);    
    $row['kind_sn'] = htmlspecialchars($row['kind_sn']);
    $row['title'] = htmlspecialchars($row['title']);
    $row['content'] = htmlspecialchars($row['content']);
    $row['enable'] = htmlspecialchars($row['enable']); 
    $row['date'] = date("d-m-yy",$row['date']);   
    $row['date'] = htmlspecialchars($row['date']);

    $smarty->assign("row",$row);  
}

function prods_insert_form(){
    global $smarty,$db;   
   
    $sql = "SELECT * FROM `prods`";
    $result = $db->query($sql) or die($db->error() . $sql);    
    $rows=[];
    while($row = $result->fetch_assoc()){   
        $row['sn'] = (int)($row['sn']);    
        $row['kind_sn'] = htmlspecialchars($row['kind_sn']);
        $row['title'] = htmlspecialchars($row['title']);
        $row['content'] = htmlspecialchars($row['content']);
        $row['enable'] = htmlspecialchars($row['enable']);
        $rows[] = $row;
    }
    $smarty->assign("rows",$rows);  
}

function prods_insert(){
    global $smarty,$db;    
    
    $_POST['title'] =  isset( $_POST['title'])?  $db->real_escape_string($_POST['title']) : "";
    $_POST['kind_sn'] =  isset( $_POST['kind_sn'])?  $db->real_escape_string($_POST['kind_sn']) : "";
    $_POST['enable'] =  isset( $_POST['enable'])?  $db->real_escape_string($_POST['enable']) : "";   
    $_POST['content'] =  isset( $_POST['content'])?  $db->real_escape_string($_POST['content']) : "";
    $datenow = strtotime('now');
    $datenow = (int)$datenow;
    
    $insert_sql = "INSERT INTO prods
    (`kind_sn`,`title`,`content`,`enable`,`date`) 
    VALUES ('{$_POST['kind_sn']}','{$_POST['title']}','{$_POST['content']}','{$_POST['enable']}',
    '{$datenow}');";

    $db->query($insert_sql)or die($db->error() . $insert_sql);   
    return "新增一筆類別資料";
}



