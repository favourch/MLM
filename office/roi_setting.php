<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="roi_setting";

$roiqry = $objCore->DBConn->GetOne("SELECT 	amount FROM roi_setting WHERE id='1'");

if(isset($_POST['update_btn'])=='Update'){
	$amount			= $_POST['amount'];

	$update_amt = $objCore->DBConn->Execute("UPDATE roi_setting SET amount='".$amount."',added_date='".time()."' WHERE id='1'");
	header("Location:roi_setting.php");
}

$objCore->smarty->assign(array('roiqry'=>$roiqry,'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>