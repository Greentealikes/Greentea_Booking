<?php
require_once 'head.php';

#登入狀態
$op = system_CleanVars($_REQUEST, 'op', 'about_list', 'string');

#主畫面切換變數
$switch_id = isset($_GET['pageid'])? $_GET['pageid'] : '';

$usid = system_CleanVars($_REQUEST, 'usid', '', 'int');

switch ($op){
    case "about_brand":
        $op = "about_brand";
    break;

    case "about_news":
        $op = "about_news";
    break;

    default:
        $op = "about_list";
    break;
}

$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op);
$smarty->assign("pageid", $switch_id);

$smarty->display('theme.tpl');

