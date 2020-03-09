
<?php
require_once 'head.php';

#登入狀態
$op = system_CleanVars($_REQUEST, 'op', 'op_list', 'string');

#線上預訂行為狀態 
$book = system_CleanVars($_REQUEST, 'book', 'booking_form', 'string');

#使用狀態
$using = system_CleanVars($_REQUEST, 'using', '', 'string');

#主畫面切換變數
$switch_id = isset($_GET['pageid'])? $_GET['pageid'] : '2';

#線上預訂頁面切換變數 
$switch_bookpage = isset($_GET['bookpage'])? $_GET['bookpage'] : '2';

$usid = system_CleanVars($_REQUEST, 'usid', '', 'int');

global $error; 
$error = 0;

switch ($book){
    case "book_descrn_form":
        $switch_bookpage = 1;
        $book = "book_descrn_form";
    break;

    case "booking_form":
        $switch_bookpage = 2;
        $msg =  booking_form();
        $book = "booking_form";       

    break;

    case "booking_result_form":
        $switch_bookpage = 3;       
        $book = "booking_result_form";
    break;

    case "booking_query_form":
        $switch_bookpage = 4;       
        $book = "booking_query_form";
      
    break;    

    #訪客線上預訂
    case "onlineBook" :
        $switch_id = 2;      
        $msg = on_booking();  
        if($msg == 1){
            $switch_bookpage = 3; 
        }
        else{
            $switch_bookpage = 2;
            $error = -1;  
            $smarty->assign("error", $error);
            redirect_header("Onbooking.php", $msg , 3000, 0);          
            exit; 
        }
    break; 

    #訪客查詢資料
    case "visitbook":       
        $_POST['Inquiremail'] = isset($_POST['Inquiremail'])? $_POST['Inquiremail'] : 'false';        
        $switch_id = 2;
        $switch_bookpage = 4;  
        booking_result($_POST['Inquiremail']);       
    break; 
}


$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op);
$smarty->assign("pageid", $switch_id);
$smarty->assign("bookpage", $switch_bookpage);
$smarty->assign("error", $error);
$smarty->assign("using", $using);   

$smarty->display('theme.tpl');


function booking_form(){
    global $db,$smarty;
    $kinds_sql="SELECT * FROM `prods`";
       
    $kind_result = $db->query($kinds_sql) or die($db->error() . $kinds_sql);  
    $kind_rows=[];

    while($kind_row = $kind_result->fetch_assoc()){
        $kind_row['kind_sn'] = htmlspecialchars($kind_row['kind_sn']);  
        $kind_row['sn'] = htmlspecialchars($kind_row['sn']);      
        $kind_row['title'] = htmlspecialchars($kind_row['title']);  
        $kind_row['enable'] = htmlspecialchars($kind_row['enable']);             
        $kind_rows[] = $kind_row;
    }
    $smarty->assign("kind_rows",$kind_rows); 
    return "預定表單內容"; 
}

 function on_booking_form(){
    global $smarty,$db;

    $kinds_sql="SELECT * FROM `prods`";
       
    $kind_result = $db->query($kinds_sql) or die($db->error() . $kinds_sql);  
    $kind_rows=[];

    while($kind_row = $kind_result->fetch_assoc()){
        $kind_row['kind_sn'] = htmlspecialchars($kind_row['kind_sn']);  
        $kind_row['sn'] = htmlspecialchars($kind_row['sn']);      
        $kind_row['title'] = htmlspecialchars($kind_row['title']);  
        $kind_row['enable'] = htmlspecialchars($kind_row['enable']);             
        $kind_rows[] = $kind_row;
    }   
    $smarty->assign("kind_rows",$kind_rows);  
 }


#線上預訂
function on_booking(){
    global $smarty,$db;

    #人數限制
    $max_num_limit = 20;
    $min_num_limit = 1;
    $error = 0;
    
    $_POST['usname'] =  isset( $_POST['usname'])? $db->real_escape_string($_POST['usname']) : "";
    $_POST['usphone'] =  isset( $_POST['usphone'])? $db->real_escape_string($_POST['usphone']) : "";
    $_POST['usemail'] =  isset( $_POST['usemail'])? $db->real_escape_string($_POST['usemail']) : "";
    $_POST['usarea'] =  isset( $_POST['usarea'])? $db->real_escape_string($_POST['usarea']) : "";
    $_POST['datein'] =  isset( $_POST['datein'])? $db->real_escape_string($_POST['datein']) : "";
    $_POST['dateout'] =  isset( $_POST['dateout'])?  $db->real_escape_string($_POST['dateout']) : "";
    $_POST['usnum'] =  isset( $_POST['usnum'])?  $db->real_escape_string($_POST['usnum']) : "";
    $_POST['ustypes'] =  isset( $_POST['ustypes'])?  $db->real_escape_string($_POST['ustypes']) : "";
    $_POST['usadd'] =  isset( $_POST['usadd'])?  $db->real_escape_string($_POST['usadd']) : "";
    
    #入住日期不得大於退房日期
    if($_POST['datein'] !="" || $_POST['dateout'] != ""){
        if( $_POST['datein'] > $_POST['dateout'])
            $error = 2;
    }

    #人數限制
    if($_POST['usnum'] == "" or $_POST['usnum'] < $min_num_limit or $_POST['usnum'] > $max_num_limit){
        $error = 3;
    }
    
    #以電話及信箱確定資料是否重複
    $sql= "SELECT `usphone`,`usemail` FROM `userdb` WHERE `usphone` = '{$_POST['usphone']}' AND `usemail` = '{$_POST['usemail']}'";   
    $result = $db->query($sql) or die($db->error() . $sql);

    $row = $result->fetch_assoc();  
    if($row){
        $row['usphone'] = htmlspecialchars($row['usphone']);
        $row['usemail'] = htmlspecialchars($row['usemail']);
    }   
    if($_POST['usemail'] == $row['usemail'] && $_POST['usphone'] == $row['usphone']){
        $error = 1;
    } 

    if($error == 0){
        $insert_sql = "INSERT INTO userdb
        (`usname`,`usphone`,`usemail`,`usarea`,`datein`,`dateout`,`usnum`,`ustype`,`usadd`) 
        VALUES ('{$_POST['usname']}','{$_POST['usphone']}','{$_POST['usemail']}','{$_POST['usarea']}',
        '{$_POST['datein']}','{$_POST['dateout']}','{$_POST['usnum']}','{$_POST['ustypes']}','{$_POST['usadd']}')";
        
        $db->query($insert_sql)or die($db->error() . $insert_sql);   
        
        booking_result($_POST['usemail']);       
        return "1";
    }

    else if($error == 1){       
        return "線上預訂失敗\\n(已存在相同資料)";
    }
    else if($error == 2){
        return "線上預訂失敗\\n(入住時間不得大於退房時間)";  
    }
    else if($error == 3){
        return "線上預訂失敗\\n(預定人數格式錯誤)";  
    }
    return "線上預訂失敗";  
}

#訪客查詢資料   
function booking_result($email){
    global $smarty,$db;   

    $sql= "SELECT * FROM `userdb` WHERE  `usemail` = '{$email}'";   
   
    $result = $db->query($sql) or die($db->error() . $sql);    
    $row = $result->fetch_assoc(); 

    if($row){
        $row['usname'] = htmlspecialchars($row['usname']);
        $row['usphone'] = htmlspecialchars($row['usphone']);
        $row['usemail'] = htmlspecialchars($row['usemail']);
        $row['usarea'] = htmlspecialchars($row['usarea']);
        $row['datein'] = htmlspecialchars($row['datein']);  
        $row['dateout'] = htmlspecialchars($row['dateout']); 
        $row['usnum'] = (int)($row['usnum']);    
        $row['ustype'] = htmlspecialchars($row['ustype']);  
        $row['usadd'] = htmlspecialchars($row['usadd']);
    }

    
    $kinds_sql="SELECT * FROM `prods` WHERE `kind_sn` = '{$row['ustype']}'";
    $kind_result = $db->query($kinds_sql) or die($db->error() . $kinds_sql);  
    
    $kind_row = $kind_result->fetch_assoc();
    if($kind_row){
        $kind_row['kind_sn'] = htmlspecialchars($kind_row['kind_sn']);  
        $kind_row['sn'] = htmlspecialchars($kind_row['sn']);      
        $kind_row['title'] = htmlspecialchars($kind_row['title']);  
        $kind_row['enable'] = htmlspecialchars($kind_row['enable']);
    }
      
    $smarty->assign("kind_row",$kind_row);  
    $smarty->assign("row",$row);  
}


