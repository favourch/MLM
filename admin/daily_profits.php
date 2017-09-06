<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="daily_profits";


$qry = "SELECT * FROM bonus_info WHERE bonus_name ='DB' and user_id='".$user_id."'";
$daily_bonus = $objCore->DBConn->GetArray($qry);

$objCore->smarty->assign(array('daily_bonus'=>$daily_bonus, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>