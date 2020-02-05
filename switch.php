<?php
    require_once 'head.php';
    
    $switch_id = isset($_GET['pageid'])? $_GET['pageid'] : '0';

    $admin = $_SESSION['admin'];
    switch($switch_id){
        case '1':
            $smarty->display('about.tpl');
        break;
        case '2':
            $smarty->display('portfolio.tpl');
        break;
        case '3':
            $smarty->display('services.tpl');
        break;
        case '4':
            $smarty->display('blog.tpl');
        break;
        case '5':
            $smarty->display('contact.tpl');
        break;
        default:
            $smarty->display('theme.tpl');
        break;

    }
?>
