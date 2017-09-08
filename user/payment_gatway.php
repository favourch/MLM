<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="payment_gatway";


$qry = "SELECT * FROM experts ORDER BY employee_id   ";
$experts_rslt = $objCore->DBConn->GetArray($qry);
//print_r($experts_rslt);


$objCore->smarty->assign(array('experts_rslt'=>$experts_rslt, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>