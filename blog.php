<?php
require_once 'head.php';

#登入狀態
$op = system_CleanVars($_REQUEST, 'op', 'blog_list', 'string');

#主畫面切換變數
$switch_id = isset($_GET['pageid'])? $_GET['pageid'] : '';

switch ($op){
    case "baking":
        $op = "baking";
    break;

    case "parch":
        $op = "parch";
    break;

    case "parch_gourmets":
        $op = "parch_gourmets";
    break;

    case "parch_wreawool":
        $op = "parch_wreawool";
    break;

    case "parch_contact":
        $op = "parch_contact";
    break;

    default:
        $op = "blog_list";
    break;
}

$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op);
$smarty->assign("pageid", $switch_id);

$smarty->display('theme.tpl');

