<?php
  require_once 'head.php';
  
  
  #主畫面切換 
  $switch_id = isset($_GET['pageid'])? $_GET['pageid'] : '0';

  #線上預訂頁切換
  $switch_bookpage = isset($_GET['bookpage'])? $_GET['bookpage'] : '0';

  #登入狀態
  $op = system_CleanVars($_REQUEST, 'op', 'op_list', 'string');

  #問題狀態
  $sn = system_CleanVars($_REQUEST, 'sn', '', 'int');
  $sn_success = 1;
  $sn_error = 0;

  #引入$_SESSION['amdin'] 初始設定為false
  $admin = $_SESSION['admin'];
   
  #op判斷
  switch ($op){
    case "login" :   
      $msg = login();
      if($msg == '登入成功'){
          $sn = $sn_success;
          redirect_header("page_sw.php",$msg, 3000, $sn);
      }
      else{     
        $sn = $sn_error;  
        redirect_header("page_sw.php", $msg, 3000, $sn);     
      }
      exit;

    case "logout":
        logout();  
        $sn = $sn_success;     
        redirect_header("page_sw.php", '成功登出' , 3000, $sn);
        exit;

    #註冊動作
    case "reg":
        $msg = reg();       
        header("location:index.php"); 
        exit;

    #註冊介面
    case "reg_form" :
      $msg = reg_form();      
      break;
  
    #預設(op_list)
    default:
      $op = "op_list";
      break;  
    }

   /*---- 將變數送至樣版----*/
   $smarty->assign("WEB", $WEB);
   $smarty->assign("op", $op);
   $smarty->assign("pageid", $switch_id);
   $smarty->assign("bookpage", $switch_bookpage);

  $smarty->display('theme.tpl');
  exit;

  function reg(){
    global $db;

    #過濾變數
    $_POST['uname'] = db_filter($_POST['uname'], '帳號');
    $_POST['pass'] = db_filter($_POST['pass'], '密碼');
    $_POST['chk_pass'] = db_filter($_POST['chk_pass'], '確認密碼');
    $_POST['name'] = db_filter($_POST['name'], '姓名');
    $_POST['tel'] = db_filter($_POST['tel'], '電話');
    $_POST['email'] = db_filter($_POST['email'], 'email',FILTER_SANITIZE_EMAIL);
    
    
    #寫入語法
    if( $_POST['pass'] !=  $_POST['chk_pass']) 
    {
      $sn = $sn_error;  
      redirect_header("page_sw.php", '密碼不一致' , 3000,$sn);
      //die("密碼不一致");
    }
    else{
      $_POST['pass'] = password_hash($_POST['chk_pass'], PASSWORD_DEFAULT);
    }
      $sql="INSERT INTO `users` 
          (`uname`, `pass`, `name`, `tel`, `email`,`kind`,`token`)  
          VALUES 
          ('{$_POST['uname']}', '{$_POST['pass']}', '{$_POST['name']}', '{$_POST['tel']}', '{$_POST['email']}','0','{xxxxxx}');
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
