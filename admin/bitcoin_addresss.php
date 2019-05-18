<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="bitcoin_addresss";

$bitcoin_details = $objCore->DBConn->GetRow("SELECT bitcoin_address,bitcoin_type FROM user_registration WHERE id='".$user_id."'");


if(isset($_POST['bitadd_btn'])=='Update'){
	$bitcoin_type 		= 	$_POST['bitcoin_type'];

	$bitcoin_address	=	$_POST['bitcoin_address'];

	$Update_add = $objCore->DBConn->Execute("UPDATE user_registration SET bitcoin_address ='".$bitcoin_address."',bitcoin_type='".$bitcoin_type."' WHERE id='".$user_id."'");
	header("Location:bitcoin_addresss.php");
	
	}


//print_r($experts_rslt);


$objCore->smarty->assign(array('bitcoin_details'=>$bitcoin_details, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>