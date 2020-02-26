<?php
require_once 'head.php';

#線上預訂行為狀態 
$book = system_CleanVars($_REQUEST, 'book', '', 'string');

$usid = system_CleanVars($_REQUEST, 'usid', '', 'int');

switch ($book){
    case 'book_form':
        book_form($usid);    
    break;

    case "book_delete" :
        $msg = book_delete($usid);
        redirect_header("userbook.php?book=book_list", $msg, 3000,1);
        exit;

    case "book_update":
        $msg = book_update($usid);  
        redirect_header("userbook.php?book=book_list", $msg, 3000,1);
    break;
    
    case "book_list":
        book_list();
    break;
}

$smarty->assign("WEB", $WEB);  
$smarty->assign("book",$book);     
$smarty->display('admin.tpl');

function book_delete($usid){
    global $db; 
    $sql="DELETE FROM `userdb`
          WHERE `usid` = '{$usid}';
    ";
    $db->query($sql) or die($db->error() . $sql);
    return "會員刪除成功";
  }

function book_update($usid=""){
    global $db;
        
    $sql = "UPDATE `userdb` SET 
            `usname` = '{$_POST['usname']}',                  
            `usphone` = '{$_POST['usphone']}',
            `usemail` = '{$_POST['usemail']}',
            `usarea` = '{$_POST['usarea']}',
            `datein` = '{$_POST['ordatein']}',
            `dateout` = '{$_POST['ordateout']}',
            `usnum` = '{$_POST['usnum']}',
            `ustype` = '{$_POST['ustype']}',
            `usadd` = '{$_POST['usadd']}'
            WHERE `userdb`.`usid` = '{$usid}'";   

    $db->query($sql) or die($db->error().$sql);
    return '資料密碼更改成功';
}


function book_form($usid=""){
    global $smarty,$db;
    if($usid){
      $sql="SELECT *
            FROM `userdb`
            WHERE `usid` = '{$usid}'
      ";//die($sql);
      
      $result = $db->query($sql) or die($db->error() . $sql);
      $row = $result->fetch_assoc(); 
    }
      
    $row['usid'] = isset($row['usid']) ? $row['usid'] : "";
    $row['usname'] = isset($row['usname']) ? $row['usname'] : "";
    $row['usphone'] = isset($row['usphone']) ? $row['usphone'] : "";
    $row['usemail'] = isset($row['usemail']) ? $row['usemail'] : "";
    $row['usarea'] = isset($row['usarea']) ? $row['usarea'] : "";
    $row['datein'] = isset($row['datein']) ? $row['datein'] : "";
    $row['dateout'] = isset($row['dateout']) ? $row['dateout'] : ""; 
    $row['usnum'] = isset($row['usnum']) ? $row['usnum'] : ""; 
    $row['ustype'] = isset($row['ustype']) ? $row['ustype'] : ""; 
    $row['usadd'] = isset($row['usadd']) ? $row['usadd'] : ""; 
    
    $smarty->assign("row",$row);
   
  }

function book_list(){
    global $smarty,$db;   
   
    $sql = "SELECT * FROM `userdb`";
    $result = $db->query($sql) or die($db->error() . $sql);    
    $rows=[];
    while($row = $result->fetch_assoc()){   
        $row['usname'] = htmlspecialchars($row['usname']);//字串
        $row['usphone'] = htmlspecialchars($row['usphone']);//字串
        $row['usemail'] = htmlspecialchars($row['usemail']);//字串
        $row['usarea'] = htmlspecialchars($row['usarea']);//字串
        $row['datein'] = htmlspecialchars($row['datein']);//字串   
        $row['dateout'] = htmlspecialchars($row['dateout']);//字串    
        $row['usnum'] = (int)($row['usnum']);    
        $row['ustype'] = htmlspecialchars($row['ustype']);//字串    
        $row['usadd'] = htmlspecialchars($row['usadd']);//字串 
        $rows[] = $row;
    }  
    
    $smarty->assign("rows",$rows);  
}
