<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="user_registration";


$qry = "SELECT * FROM user_registration ORDER BY id DESC ";
$user_rslt = $objCore->DBConn->GetArray($qry);
//print_r($user_rslt);


$objCore->smarty->assign(array('user_rslt'=>$user_rslt, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>