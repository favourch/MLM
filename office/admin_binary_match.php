<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="admin_binary_match";


$qry = "SELECT b.*, u.desired_username,u.your_fullname FROM bonus_info as b, user_registration as u WHERE u.id=b.user_id and bonus_name ='PB' ORDER BY b.id DESC";
$paring_bonus = $objCore->DBConn->GetArray($qry);
//print_r($paring_bonus);

$objCore->smarty->assign(array('paring_bonus'=>$paring_bonus, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>