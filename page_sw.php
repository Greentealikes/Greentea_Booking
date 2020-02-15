<?php
    require_once 'head.php';
    require_once 'templates/php/redirect.php';
    
    #主畫面切換 
    $switch_id = isset($_GET['pageid'])? $_GET['pageid'] : '0';

    #線上預訂頁切換
    $switch_bookpage = isset($_GET['bookpage'])? $_GET['bookpage'] : '0';

    /* 過濾變數，設定預設值 */
    $op = system_CleanVars($_REQUEST, 'op', 'op_list', 'string');
    $sn = system_CleanVars($_REQUEST, 'sn', '', 'int');
    
    #引入$_SESSION['amdin'] 初始設定為false
    $admin = $_SESSION['admin'];
   
    /* 程式流程 */
    switch ($op){
        case "login" :   
        $msg = login();
        if($msg == '登入成功')
            redirect_header("page_sw.php",$msg, 3000);
        else
        redirect_header("page_sw.php", $msg, 3000);     
        exit;

    case "logout":
        logout();
        redirect_header("page_sw.php", '登出' , 3000);
        exit;

    case "reg":
        $msg = reg();
        header("location:index.php"); 
        exit;

   
    case "login_form" :
      $msg = login_form();
      break;
  
    case "reg_form" :
      $msg = reg_form();      
      break;
  
    case "reg" :
      $msg = reg();
      header("location:index.php");
      exit;
  
    default:
      $op = "op_list";
      break;  
  }

   /*---- 將變數送至樣版----*/
   $smarty->assign("WEB", $WEB);
   $smarty->assign("op", $op);
   $smarty->assign("pageid", $switch_id);
   $smarty->assign("bookpage", $switch_bookpage);


   if(isset($_GET['bookpage'])){
       $smarty->display('book_fom.tpl');
       exit;
   }
   else {
      $smarty->display('theme.tpl');
      exit;
   }

    #動畫視窗
    function redirect_header($url, $message, $time) {
    $_SESSION['redirect'] = true;
    $_SESSION['message'] = $message;
    $_SESSION['time'] = $time;
    header("location:{$url}");
    exit;
  }

  function reg(){
    global $db;
    #過濾變數
    $_POST['uname'] = $db->real_escape_string($_POST['uname']);
    $_POST['pass'] = $db->real_escape_string($_POST['pass']);
    $_POST['chk_pass'] = $db->real_escape_string($_POST['chk_pass']);
    $_POST['name'] = $db->real_escape_string($_POST['name']);
    $_POST['tel'] = $db->real_escape_string($_POST['tel']);
    $_POST['email'] = $db->real_escape_string($_POST['email']);
    
    #寫入語法
    if( $_POST['pass'] !=  $_POST['chk_pass']) 
    {
      die("密碼不一致");
    }
    else{
      $_POST['pass'] = password_hash($_POST['chk_pass'], PASSWORD_DEFAULT);
    }
      $sql="INSERT INTO `users` 
          (`uname`, `pass`, `username`, `tel`, `email`,`kind`,`token`)  
          VALUES 
          ('{$_POST['uname']}', '{$_POST['pass']}', '{$_POST['name']}', '{$_POST['tel']}', '{$_POST['email']}','{0}','{xxxxxx}');
    ";
    #寫入資料庫
    $db->query($sql) or die($db->error. $sql);
    $uid = $db->insert_id;
    return $uid;
  }

    #使用者登出
    function logout(){
        $_SESSION['admin'] = false;
        setcookie('name','',time() - 3600 * 24 * 365);
        setcookie('token','',time() - 3600 * 24 * 365);
    }
    
    
    function reg_form(){
        global $smarty;
    }
  
  function login(){
    global $smarty;
    $name="admin";
    $pass="111111";
    $token="xxxxxx";
  
    if($name == $_POST['name'] and $pass == $_POST['pass']){
      $_SESSION['admin'] = true; 
      $_POST['remember'] = isset($_POST['remember']) ? $_POST['remember'] : "";
      
      if($_POST['remember']){
        setcookie("name", $name, time()+ 3600 * 24 * 365); 
        setcookie("token", $token, time()+ 3600 * 24 * 365); 
      }
      return "登入成功";
    }else{ 
      return "登入失敗";
    }
  }

   
?>
