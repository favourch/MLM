<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="account_info";


$planqry = "SELECT plan_id,deposit_amount,deposit_date,total_profit,days_of_profit FROM profile_info WHERE user_id= '".$_SESSION["user_id"]."'";
$plan_rslt = $objCore->DBConn->GetRow($planqry);

//print_r($plan_rslt);


if($_REQUEST[save] == 1)
$showMsg = "Detail Updated Successfully...";

$objCore->smarty->assign(array('showMsg'=>$showMsg,'plan_rslt'=>$plan_rslt,));
include "footer.php";
?>