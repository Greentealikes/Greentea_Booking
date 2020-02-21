
<?php
require_once 'head.php';

 #登入狀態
 $op = system_CleanVars($_REQUEST, 'op', 'op_list', 'string');
#線上預訂行為狀態 
$bookbehavior = system_CleanVars($_REQUEST, 'bookbehavior', '', 'string');

#主畫面切換變數
$switch_id = isset($_GET['pageid'])? $_GET['pageid'] : '2';

#線上預訂頁面切換變數 
$switch_bookpage = isset($_GET['bookpage'])? $_GET['bookpage'] : '2';

global $error; 
$error = 0;

switch ($bookbehavior){
    #訪客線上預訂
    case "onlineBook" :
        $switch_id = 2;
      
        $msg = on_booking();  
        if($msg == 1){
            $switch_bookpage = 3;
                    
        }
        else{
            $switch_bookpage = 2;  
            $smarty->assign("error", $msg);
            redirect_header("Onbooking.php", '線上預訂失敗\n(檢查是否重複輸入)' , 3000, 0);          
            exit; 
        }
    break; 

    #訪客查詢資料
    case "visitbook":
        $switch_id = 2;
        $switch_bookpage = 4;    
        booking_result();           
    break;  
}
    $smarty->assign("WEB", $WEB);
    $smarty->assign("op", $op);
    $smarty->assign("pageid", $switch_id);
    $smarty->assign("bookpage", $switch_bookpage);
    $smarty->assign("error", $error);

    $smarty->display('theme.tpl');

#線上預訂
function on_booking(){
    global $smarty,$db;
    $error = 0;
    
    #檢查資料是否重複
    $_POST['usname'] =  isset( $_POST['usname'])?  $_POST['usname'] : "";
    $_POST['usphone'] =  isset( $_POST['usphone'])?  $_POST['usphone'] : "";
    $_POST['usemail'] =  isset( $_POST['usemail'])?  $_POST['usemail'] : "";
    $_POST['usarea'] =  isset( $_POST['usarea'])?  $_POST['usarea'] : "";
    $_POST['datein'] =  isset( $_POST['datein'])?  $_POST['datein'] : "";
    $_POST['dateout'] =  isset( $_POST['dateout'])?  $_POST['dateout'] : "";
    $_POST['usnum'] =  isset( $_POST['usnum'])?  $_POST['usnum'] : "";
    $_POST['ustype'] =  isset( $_POST['ustype'])?  $_POST['ustype'] : "";
    $_POST['usadd'] =  isset( $_POST['usadd'])?  $_POST['usadd'] : "";
    
    $_POST['usname'] = $db->real_escape_string($_POST['usname']);  
    $_POST['usphone'] = $db->real_escape_string($_POST['usphone']);      
    $_POST['usemail'] = $db->real_escape_string($_POST['usemail']);   
    $_POST['usarea'] = $db->real_escape_string($_POST['usarea']);   
    $_POST['datein'] = $db->real_escape_string($_POST['datein']);    
    $_POST['dateout'] = $db->real_escape_string($_POST['dateout']);   
    $_POST['usnum'] = $db->real_escape_string($_POST['usnum']);   
    $_POST['ustype'] = $db->real_escape_string($_POST['ustype']); 
    $_POST['usadd'] = $db->real_escape_string($_POST['usadd']);  
    
    $sql= "SELECT * FROM `userdb` WHERE `usphone` = '{$_POST['usphone']}' AND `usemail` = '{$_POST['usemail']}'";   
    $result = $db->query($sql) or die($db->error() . $sql);

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
        if($_POST['usemail'] == $row['usemail'] && $_POST['usemail'] == $row['usemail']){
            $error = 1;
        }       
    }  

    if($error == 0){
        $insert_sql = "INSERT INTO userdb
        (`usname`,`usphone`,`usemail`,`usarea`,`datein`,`dateout`,`usnum`,`ustype`,`usadd`) 
        VALUES ('{$_POST['usname']}','{$_POST['usphone']}','{$_POST['usemail']}','{$_POST['usarea']}',
        '{$_POST['datein']}','{$_POST['dateout']}','{$_POST['usnum']}','{$_POST['ustype']}','{$_POST['usadd']}')";
        
        $db->query($insert_sql)or die($db->error() . $insert_sql);   
        
        $sql= "SELECT * FROM `userdb` WHERE `usphone` = '{$_POST['usphone']}' AND `usemail` = '{$_POST['usemail']}'";   
        $result = $db->query($sql) or die($db->error() . $sql);

        $row = $result->fetch_assoc(); 
        $row['usname'] = htmlspecialchars($row['usname']);//字串
        $row['usphone'] = htmlspecialchars($row['usphone']);//字串
        $row['usemail'] = htmlspecialchars($row['usemail']);//字串
        $row['usarea'] = htmlspecialchars($row['usarea']);//字串
        $row['datein'] = htmlspecialchars($row['datein']);//字串   
        $row['dateout'] = htmlspecialchars($row['dateout']);//字串    
        $row['usnum'] = (int)($row['usnum']);    
        $row['ustype'] = htmlspecialchars($row['ustype']);//字串    
        $row['usadd'] = htmlspecialchars($row['usadd']);//字串 
      
        $smarty->assign("row",$row);  
        return "1";
    }       
    return "-1";   
}

#訪客查詢資料
function booking_result(){
    global $smarty,$db;   
    $_POST['Inquirname'] = isset($_POST['Inquirname'])? $_POST['Inquirname'] : 'false';
    $_POST['Inquiremail'] = isset($_POST['Inquiremail'])? $_POST['Inquiremail'] : 'false';

    $sql= "SELECT * FROM `userdb` WHERE `usname` = '{$_POST['Inquirname']}' AND `usemail` = '{$_POST['Inquiremail']}'";   
   
    $result = $db->query($sql) or die($db->error() . $sql);

    $row = $result->fetch_assoc(); 
    $row['usname'] = htmlspecialchars($row['usname']);//字串
    $row['usphone'] = htmlspecialchars($row['usphone']);//字串
    $row['usemail'] = htmlspecialchars($row['usemail']);//字串
    $row['usarea'] = htmlspecialchars($row['usarea']);//字串
    $row['datein'] = htmlspecialchars($row['datein']);//字串   
    $row['dateout'] = htmlspecialchars($row['dateout']);//字串    
    $row['usnum'] = (int)($row['usnum']);    
    $row['ustype'] = htmlspecialchars($row['ustype']);//字串    
    $row['usadd'] = htmlspecialchars($row['usadd']);//字串 
    $smarty->assign("row",$rows); 
    $smarty->assign("Inquire","true"); 
}


