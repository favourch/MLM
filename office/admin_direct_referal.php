<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="admin_direct_referal";



$qry = "SELECT b.desired_username,b.your_fullname, (select desired_username from user_registration x where x.id = a.parent_id) spancer, (select plan_name from plan_info x where plan_id = c.plan_id) as plan_name, c.Total_Amount,c.added_date FROM relations a, user_registration b, profile_info c WHERE parent_id != '0' and b.id = a.child_id and b.id = c.user_id ORDER BY b.id DESC";
$direct_referral_rslt = $objCore->DBConn->GetArray($qry);
//print_r($direct_referral_rslt);



$objCore->smarty->assign(array('direct_referral_rslt'=>$direct_referral_rslt, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>