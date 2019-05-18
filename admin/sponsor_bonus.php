<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="sponsor_bonus";


$qry = "SELECT * FROM bonus_info WHERE bonus_name ='SB' and user_id='".$user_id."'";
$sponser_bonus = $objCore->DBConn->GetArray($qry);
//print_r($sponser_bonus);

if($_REQUEST[save] == 1)
$showMsg = "Detail Updated Successfully...";

$objCore->smarty->assign(array('experts_rslt'=>$experts_rslt, 'showMsg'=>$showMsg,'sponser_bonus'=>$sponser_bonus));
include "footer.php";
?>