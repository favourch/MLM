<?php
include_once "includes.inc.php";



if($_GET[existing_check] == "username"){

	$getexisting_check  = $objCore->DBConn->GetOne("SELECT desired_username FROM user_registration WHERE desired_username='".$_GET[desired_username]."'");

if($getexisting_check=='')
	echo json_encode(1);
	else
	echo json_encode(0);
	exit;
	
}


if($_GET[existing_check] == "checkemail"){
	//echo "Email";die;

	$getexisting_check  = $objCore->DBConn->GetOne("SELECT email_address FROM user_registration WHERE email_address='".$_GET[email_address]."'");

if($getexisting_check=='')
	echo json_encode(1);
	else
	echo json_encode(0);
	exit;
	
}

if($_GET[existing_check] == "binaryExpand"){

	$content =  $objCore->binaryTree($_GET['parent_id']);
		echo $content;
	//}
	

	
}


	
?>