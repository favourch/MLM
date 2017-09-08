<?php
ob_start();
include_once "includes.inc.php";
include_once "session.inc.php";

if($_SESSION["user_id"]=='' && $_SESSION["admin_id"]=='')
header('Location:login.php');

@EXTRACT($_POST);
@EXTRACT($_GET);

$page="admin_profile_info";


$account_status =  $objCore->DBConn->GetOne("SELECT account_status FROM profile_info WHERE id='".$user_id."'");


$Affiliate =  HTTP_PATH.'admin/registration.php';



if($_POST['admin_info'] == "admin_info")
{

	$setfld = "username='".$_POST[username]."'";
	$setfld .= ", email='".$_POST[email]."'";
	$setfld .= ", website_name='".$_POST[website_name]."'";
	$setfld .= ", phone='".$_POST[phone]."'";
	
	$update_content_qry = "UPDATE admin SET $setfld where id='1'";
	$objCore->DBConn->Execute($update_content_qry);

}

$GetDetails_Qry = "SELECT * FROM admin WHERE id='1'";
$GetDetails_Qry = $objCore->DBConn->GetRow($GetDetails_Qry);
//print_r($GetDetails_Qry );





if($_REQUEST[save] == 1)
$displayMsg = "Details Updated  Successfully...";

$objCore->smarty->assign(array("GetDetails_Qry" => $GetDetails_Qry, "displayMsg" => $displayMsg,"Affiliate"=>$Affiliate, "HTTP_PATH"=>HTTP_PATH,"GENDER"=>$GENDER,"NATIONALITY"=>$NATIONALITY,"GetAffiliate_name_Qry"=>$GetAffiliate_name_Qry,"account_status"=>$account_status));
$objCore->smarty->assign("id",$_GET['id']);

include "footer.php";
?>