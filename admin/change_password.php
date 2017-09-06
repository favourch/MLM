<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="change_password";

$qry = "SELECT 	define_password FROM user_registration WHERE id='".$user_id."' ";
$password = $objCore->DBConn->GetOne($qry);




if(isset($_POST['update_btn'])=='Update'){
	
	$old_password = $_POST['current_password'];
	$new_password = $_POST['new_password'];
	$repass			= $_POST['repass'];
	
	$update_qry = "UPDATE user_registration SET define_password=md5('".$new_password."') WHERE id='".$user_id."' and define_password = md5('".$old_password."')";
	$updatepassword = $objCore->DBConn->Execute($update_qry);

	//print_r($updatepassword);die;
	//header("Location:change_password.php");

	}



$objCore->smarty->assign(array('password'=>$password, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>