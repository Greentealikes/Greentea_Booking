<?php
/* 引入檔頭，每支程都會引入 */
require_once 'head.php';

#回首頁
$smarty->assign("pageid", 0);
$smarty->assign("WEB", $WEB);
$smarty->display('theme.tpl');

?>


 
