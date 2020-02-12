
<?php
require_once 'head.php';
$bookbegin = system_CleanVars($_REQUEST, 'bookbegin', 'visit', 'string');

switch ($bookbegin){
    case "visit" :
        $msg = visitorbook();
        $smarty->display('tpl/bookpg3_form.tpl');
        break;

    case "visitbook":
        $msg = visitorshow();
      
        $smarty->assign("tableshow",$msg);
        $smarty->display('tpl/bookpg4_form.tpl');
        break;
    default:
    break;  
}

$smarty->display('tpl/bookpg4_form.tpl');

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

function queryusdb($usname,$usemail){
    global $db;
}

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
    
    insertusdb($_POST['usname'],$_POST['usphone'],$_POST['usemail'],$_POST['usarea'],$_POST['datein'],
    $_POST['dateout'],$_POST['usnum'],$_POST['ustype'],$_POST['usadd']);
}

function visitorshow(){
    global $db;
   
    $Inquirname = isset($_POST['Inquirname'])? $_POST['Inquirname'] : 'false';
    $Inquiremail = isset($_POST['Inquiremail'])? $_POST['Inquiremail'] : 'false';

    $rowlength = 0;
    $tableshow = '';
    
    $showdb = "SELECT * FROM userdb"; 
    $res = $db->query($showdb) or die($db->error);

    //王大明 61616@1313
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
        //echo $tableshow;
        }  
      return  $tableshow; 
    }

    $result->free();
    $db->close();
}