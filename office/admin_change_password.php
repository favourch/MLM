<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="admin_change_password";





if(isset($_POST['update_btn'])=='Update'){
	
	$old_password = $_POST['current_password'];
	$new_password = $_POST['new_password'];
	$repass			= $_POST['repass'];
	
	
	$oldupdate_date = $objCore->DBConn->GetOne("SELECT update_date FROM admin WHERE id='1'");

	
	$update_qry = "UPDATE admin SET password='".base64_encode($new_password)."',update_date='".time()."' WHERE id='1' and password = '".base64_encode($old_password)."'";
	$updatepassword = $objCore->DBConn->Execute($update_qry);

	$newupdate_date = $objCore->DBConn->GetOne("SELECT update_date FROM admin WHERE id='1'");

	if($oldupdate_date != $newupdate_date)
	$showMsg='<div class="alert alert-success">Successfully Updated</div>';
	else
	$showMsg='<div class="alert alert-danger">Updation Failed, Password MisMatch</div>';

	//print_r($updatepassword);die;
	//header("Location:change_password.php");

	}



$objCore->smarty->assign(array('password'=>$password, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>