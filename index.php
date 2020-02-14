<?php
/* 引入檔頭，每支程都會引入 */
require_once 'head.php';
require_once 'redirect.php';

$inlog = system_CleanVars($_REQUEST, 'login', '', 'string');

$admin = $_SESSION['admin']? $_SESSION['admin'] : '0';

header("location:switch.php");

//echo $_SERVER["QUERY_STRING"];
/*---- 程式結尾-----*/

?>


 
