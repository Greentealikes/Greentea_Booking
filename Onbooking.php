
<?php
require_once 'head.php';


#線上預訂行為狀態 
$bookbehavior = system_CleanVars($_REQUEST, 'bookbehavior', 'visit', 'string');

#主畫面切換變數
$switch_id = isset($_GET['pageid'])? $_GET['pageid'] : '0';

#線上預訂頁面切換變數 
$switch_bookpage = isset($_GET['bookpage'])? $_GET['bookpage'] : '0';

#判斷是否為登入狀態
$admin = $_SESSION['admin'];

switch ($bookbehavior){
    #訪客線上預訂
    case "visit" :
        visitorbook();
        insertusdb($_POST['usname'],$_POST['usphone'],$_POST['usemail'],$_POST['usarea'],$_POST['datein'],
        $_POST['dateout'],$_POST['usnum'],$_POST['ustype'],$_POST['usadd']);
        $msg = visitshow($_POST['usname'],$_POST['usphone'],$_POST['usemail'],$_POST['usarea'],$_POST['datein'],
        $_POST['dateout'],$_POST['usnum'],$_POST['ustype'],$_POST['usadd']);
        $smarty->assign("tableshow",$msg);
    break;
    #訪客查詢資料
    case "visitbook":
        $msg = visitorshow();
        $smarty->assign("tableshow",$msg);
    break;
    default:       
    break;  
}

$smarty->assign("bookpage", $switch_bookpage);
$smarty->display('book_fom.tpl');

#新增一筆資料
function insertusdb($usname,$usphone,$usemail,$usarea,$datein,$dateout,$usnum,$ustype,$usadd){
    global $db;
    $insert_sql = "INSERT INTO userdb
    (`usname`,`usphone`,`usemail`,`usarea`,`datein`,`dateout`,`usnum`,`ustype`,`usadd`) 
    VALUES ('{$usname}',\"$usphone\",\"$usemail\",\"$usarea\",\"$datein\",\"$dateout\",\"$usnum\",\"$ustype\",\"$usadd\")";
    
    $db->query($insert_sql) ;
    $uid = $db->insert_id;
    $db->close();
    return $uid;
}

#轉換POST檔案
function visitorbook(){
    global $db;
    $_POST['usname'] = $db->real_escape_string($_POST['usname']);
    $_POST['usphone'] = $db->real_escape_string($_POST['usphone']);
    $_POST['usemail'] = $db->real_escape_string($_POST['usemail']);
    $_POST['usarea'] = $db->real_escape_string($_POST['usarea']);
    $_POST['datein'] = $db->real_escape_string($_POST['datein']);
    $_POST['dateout'] = $db->real_escape_string($_POST['dateout']);
    $_POST['usnum'] = $db->real_escape_string($_POST['usnum']);
    $_POST['ustype'] = $db->real_escape_string($_POST['ustype']);
    $_POST['usadd'] = $db->real_escape_string($_POST['usadd']);
}

function visitshow($usname,$usphone,$usemail,$usarea,$datein,$dateout,$usnum,$ustype,$usadd){
    global $db;
    $tableshow = '';    
    $tableshow = '<table class="table">
    <thead>
    <tr>
        <th scope="col">Username</th>
        <th scope="col">Userphone</th>
        <th scope="col">Useremail</th>
        <th scope="col">Userarea</th>
        <th scope="col">Datein</th>
        <th scope="col">Dateout</th>
        <th scope="col">Usernum</th>
        <th scope="col">Usertype</th>
        <th scope="col">Useradd</th>
    </tr>
    </thead>
    <tbody>';

    $tableshow = $tableshow.'<tr>';
    $tableshow = $tableshow.'<td>'.$usname.'</td>';
    $tableshow = $tableshow.'<td>'.$usphone.'</td>';
    $tableshow = $tableshow.'<td>'.$usemail.'</td>';
    $tableshow = $tableshow.'<td>'.$usarea.'</td>';
    $tableshow = $tableshow.'<td>'.$datein.'</td>';
    $tableshow = $tableshow.'<td>'.$dateout.'</td>';
    $tableshow = $tableshow.'<td>'.$usnum.'</td>';
    $tableshow = $tableshow.'<td>'.$ustype.'</td>';
    $tableshow = $tableshow.'<td>'.$usadd.'</td>';
    
    $tableshow = $tableshow.'</tr> </tbody></table>';   
    return $tableshow;
}

#訪客查詢資料
function visitorshow(){
    global $db;   
    $Inquirname = isset($_POST['Inquirname'])? $_POST['Inquirname'] : 'false';
    $Inquiremail = isset($_POST['Inquiremail'])? $_POST['Inquiremail'] : 'false';

    $tableshow = '';    
    $showdb = "SELECT * FROM userdb"; 
    $res = $db->query($showdb) or die($db->error);

    //範例 王大明 61616@1313
    $sql ="SELECT * FROM `userdb` WHERE usname='{$Inquirname}' AND usemail='{$Inquiremail}'";
        $result = $db->query($sql);

    if($result){
        while($row = $result->fetch_row()){
            $tableshow = '<table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Userphone</th>
                <th scope="col">Useremail</th>
                <th scope="col">Userarea</th>
                <th scope="col">Datein</th>
                <th scope="col">Dateout</th>
                <th scope="col">Usernum</th>
                <th scope="col">Usertype</th>
                <th scope="col">Useradd</th>
            </tr>
            </thead>
            <tbody>';
            $tableshow = $tableshow.'<tr>';
            for($length = 0; $length < 10; $length ++){
                $tableshow = $tableshow.'<td>'.$row[$length].'</td>';
            }
            $tableshow = $tableshow.'</tr> </tbody></table>';      
        }  
      return  $tableshow; 
    }
    $result->free();
    $db->close();
}


