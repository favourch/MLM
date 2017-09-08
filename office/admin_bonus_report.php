<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="admin_bonus_report";


$qry = "SELECT b.*, u.desired_username,u.your_fullname FROM bonus_info as b, user_registration as u WHERE u.id=b.user_id ORDER BY id DESC ";
$overall_bonus = $objCore->DBConn->GetArray($qry);
//print_r($overall_bonus);

$objCore->smarty->assign(array('overall_bonus'=>$overall_bonus, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>