<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="admin_roi_report";



$qry = "SELECT b.*, u.desired_username,u.your_fullname FROM bonus_info as b, user_registration as u WHERE u.id=b.user_id and bonus_name ='DB' ORDER BY id DESC";
$daily_bonus = $objCore->DBConn->GetArray($qry);
//print_r($daily_bonus);


$objCore->smarty->assign(array('daily_bonus'=>$daily_bonus, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>