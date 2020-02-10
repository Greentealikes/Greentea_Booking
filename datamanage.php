<?php
    require_once 'head.php';
    Post_data();



function Post_data(){
    $_POST['datein'] = isset( $_POST['datein']) ?  $_POST['datein'] : 0;
    $_POST['dateout'] = isset( $_POST['dateout']) ?  $_POST['dateout'] : 0;
    $_POST['peonum'] = isset( $_POST['peonum']) ?  $_POST['peonum'] : 0;
    $_POST['rotype'] = isset( $_POST['rotype']) ?  $_POST['rotype'] : 0;
   
}