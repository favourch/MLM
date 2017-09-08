<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="binary_bonus";



$qry = "SELECT * FROM bonus_info WHERE bonus_name ='PB' and user_id='".$user_id."'";
$paring_bonus = $objCore->DBConn->GetArray($qry);
//print_r($paring_bonus);

$objCore->smarty->assign(array('experts_rslt'=>$experts_rslt, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg,"paring_bonus"=>$paring_bonus));
include "footer.php";
?>