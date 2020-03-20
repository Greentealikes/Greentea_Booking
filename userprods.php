<?php
require_once 'head.php';

#線上預訂行為狀態 
$book = system_CleanVars($_REQUEST, 'book', 'prods_list', 'string');
$sn = system_CleanVars($_REQUEST, 'sn', '', 'int');
$kind = system_CleanVars($_REQUEST, 'kind', '', 'string');

if($_SESSION['user']['kind'] !== 1)redirect_header("index.php", '您沒有權限', 3000,0);


switch ($book){
    case "prods_list":
        prods_list();       
    break;

    case "op_form":
        op_form($sn);
    break;

    case "room_insert":
        $msg = room_insert($sn);
        redirect_header("userprods.php", $msg, 3000,1);
    exit; 

    case "prods_delete":
        
        $msg = prods_delete($sn,$kind);
        redirect_header("userprods.php", $msg, 3000,1);
    exit;
  
}

$smarty->assign("WEB", $WEB);  
$smarty->assign("book",$book);     
$smarty->display('admin.tpl');


function room_insert($sn=""){
    global $db,$smarty;

    $_POST['kind_sn'] = $db->real_escape_string($_POST['kind_sn']);
    $_POST['title'] = $db->real_escape_string($_POST['title']);
    $_POST['content'] = $db->real_escape_string($_POST['content']);
    $_POST['enable'] = $db->real_escape_string($_POST['enable']);

    
    /*==========================
    用$sn 決定更新prods資料
    ==========================*/
    if($sn){    
        $sql="UPDATE  `prods` SET
            `kind_sn` = '{$_POST['kind_sn']}',
            `title` = '{$_POST['title']}',
            `content` = '{$_POST['content']}',
            `enable` = '{$_POST['enable']}'
            WHERE `sn` = '{$sn}'";

        $db->query($sql) or die($db->error() . $sql);       
    }else{

        $datenow = strtotime('now');
        $datenow = (int)$datenow;
        $insert_sql = "INSERT INTO `prods`(`kind_sn`,`title`,`content`,`enable`,`date`) 
        VALUES ('{$_POST['kind_sn']}','{$_POST['title']}','{$_POST['content']}','{$_POST['enable']}',
        '{$datenow}');";

        $db->query($insert_sql)or die($db->error() . $insert_sql); 
    }    

   
   
    /*==========================
    檔案是否進行上傳
    ==========================*/
    if ($_FILES['my_file']['error'] === UPLOAD_ERR_OK){
        $sub_dir = "/"."img";
        $sort = 1;

        mk_dir(_WEB_PATH . "/uploads");
        mk_dir(_WEB_PATH . "/uploads" . $sub_dir);
        $path = _WEB_PATH . "/uploads" . $sub_dir . "/";

        #圖片名稱
        $rand = substr(md5(uniqid(mt_rand(), 1)), 0, 5);//取得一個5碼亂數

        #//取得上傳檔案的副檔名
        $ext = pathinfo($_FILES["my_file"]["name"], PATHINFO_EXTENSION); 
        $ext = strtolower($ext);//轉小寫

        //判斷檔案種類
        if ($ext == "jpg" or $ext == "jpeg" or $ext == "png" or $ext == "gif") {
            $file_kind = "img";
        } else {
            $file_kind = "file";
        }

        $file_name = $rand . "_" . $sn . "." . $ext; 
       
        /*==========================
        是否移動檔案
        ==========================*/
        if(move_uploaded_file($_FILES['my_file']['tmp_name'], $path . $file_name)){

            /*==========================
            更新files資料庫
            sn有代表是更新 否代表insert
            ==========================*/

            $sql="SELECT *
                FROM `files`
                WHERE `col_sn` = '{$_POST['kind_sn']}'";

            if(mysqli_query($db,$sql)->num_rows > 0){                

                delFilesByKindsnColsn($_POST['kind_sn']); 

                $sql = "UPDATE `files` SET 
                `col_sn` = '{$_POST['kind_sn']}',                  
                `sort` = '{$sort}',
                `file_kind` = '{$file_kind}',
                `file_name` = '{$_FILES['my_file']['name']}',
                `file_type` = '{$_FILES['my_file']['type']}',
                `file_size` = '{$_FILES['my_file']['size']}',
                `description` = 'NULL', 
                `counter` = '0',
                `name` = '{$file_name}',  
                `download_name` = '', 
                `sub_dir` = '{$sub_dir}'
                WHERE `files`.`col_sn` = '{$_POST['kind_sn']}'"; 
            
                $db->query($sql) or die($db->error() . $sql);
                
            }else{
                $sql="INSERT INTO `files` 
                (`col_sn`, `sort`, `file_kind`, `file_name`, `file_type`, `file_size`, `description`, `counter`, `name`, `download_name`, `sub_dir`) 
                VALUES 
                ('{$_POST['kind_sn']}', '{$sort}', '{$file_kind}', '{$_FILES['my_file']['name']}', '{$_FILES['my_file']['type']}', '{$_FILES['my_file']['size']}', NULL, '0', '{$file_name}', '', '{$sub_dir}')
            ";             
                $db->query($sql) or die($db->error() . $sql);
            }        
            
        }
        else {
            die("圖片上傳失敗");
        }
    }
    return "新增資料成功";
}

function prods_delete($sn,$kind){
    global $db; 


    $sql="DELETE FROM `prods`
          WHERE `sn` = '{$sn}';
    ";

    delFilesByKindsnColsn($kind,$delete=true);  

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
   
    $sql = "SELECT a.* , b.name FROM `prods` as a LEFT JOIN `files` as b on a.kind_sn = b.col_sn ";    

    $result = $db->query($sql) or die($db->error() . $sql);    
    $rows=[];
    while($row = $result->fetch_assoc()){   
        $row['sn'] = isset($row['sn']) ? (int)($row['sn']) : "";     
        $row['kind_sn'] = isset($row['kind_sn']) ? htmlspecialchars($row['kind_sn']) : "";
        $row['title'] =  isset($row['title']) ? htmlspecialchars($row['title']) : "";
        $row['enable'] = isset($row['enable']) ? htmlspecialchars($row['enable']) : ""; 
        $row['date'] = isset($row['date']) ? htmlspecialchars(date("yy-m-d",$row['date'])) : "";  
        $row['name'] =  htmlspecialchars($row['name']);   
        $rows[] = $row;
    }  

    $smarty->assign("rows",$rows);  
}

function op_form($sn=""){
    global $smarty,$db;   

    if($sn == ""){
        $sql="SELECT * FROM `prods` WHERE `sn`";
    }else{
        $sql="SELECT * FROM `prods`  WHERE `sn` = '{$sn}'";

        $result = $db->query($sql) or die($db->error() . $sql);
        $row = $result->fetch_assoc(); 
    }

    $row['sn'] = isset($row['sn']) ? (int)($row['sn']) : "";    
    $row['kind_sn'] = isset($row['kind_sn']) ? htmlspecialchars($row['kind_sn']) : "";
    $row['title'] =  isset($row['title']) ? htmlspecialchars($row['title']) : "";
    $row['content'] = isset($row['content']) ? htmlspecialchars($row['content']) : "";
    $row['enable'] = isset($row['enable']) ? htmlspecialchars($row['enable']) : ""; 
    $row['date'] = isset($row['date']) ? htmlspecialchars(date("d-m-yy",$row['date'])) : "";  

    $smarty->assign("row",$row);  
}



function delFilesByKindsnColsn($kind_sn,$delete=false){
    global $db;		
    # 1.刪除實體檔案
    $file_name = getFilesnameByKindsn($kind_sn,false);

    if($file_name){
      unlink($file_name);   
    }   
    # 假如執行	
    if($delete){        
        $sql="DELETE FROM `files`
        WHERE `col_sn` = '{$kind_sn}' 
    ";
        $db->query($sql) or die($db->error() . $sql);	
    }
    return;	 
  }


function getFilesnameByKindsn($kind_sn,$url=true){
    global $db; 
    $sql="SELECT *
                 FROM `files`
                 WHERE `col_sn` = '{$kind_sn}' 
    ";  

    $result = $db->query($sql) or die($db->error() . $sql);
    $row = $result->fetch_assoc();
    $file_name = "";
    
    if($row){
      if($url){
          $file_name = _WEB_URL . "/uploads" . $row['sub_dir'] . "/" . $row['name'];
      }else{
          $file_name = _WEB_PATH . "/uploads" . $row['sub_dir'] . "/" . $row['name'];
      }
    }   
    return $file_name;
  }
