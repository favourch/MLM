<?php
ob_start();
include_once "includes.inc.php";
include_once "session.inc.php";

if($_SESSION["user_id"]=='' && $_SESSION["admin_id"]=='')
header('Location:login.php');

@EXTRACT($_POST);
@EXTRACT($_GET);

$page="profile_info";


$account_status =  $objCore->DBConn->GetOne("SELECT account_status FROM profile_info WHERE id='".$user_id."'");


$Affiliate =  HTTP_PATH.'admin/registration.php';



if($_POST['profile_info'] == "profile_info")
{
//print_r($_POST);exit;
	$setfld = "fname='".$_POST[fname]."'";
	$setfld .= ", gender='".$_POST[gender]."'";
	$setfld .= ", dob='".$_POST[dob]."'";
	$setfld .= ", passport='".$_POST[passport]."'";
	$setfld .= ", phone='".$_POST[phone]."'";
	$setfld .= ", email='".$_POST[email]."'";
	$setfld .= ", nationality='".$_POST[nationality]."'";
	$setfld .= ", address='".$_POST[address]."'";
	$setfld .= ", street='".$_POST[street]."'";
	$setfld .= ", city='".$_POST[city]."'";
	$setfld .= ", postal_code='".$_POST[postal_code]."'";
	$setfld .= ", added_date='".time()."'";


	$update_content_qry = "UPDATE profile_info SET $setfld where id='".$_SESSION["user_id"]."'";
	$objCore->DBConn->Execute($update_content_qry);

}

$GetDetails_Qry = "SELECT * FROM profile_info WHERE id='".$_SESSION["user_id"]."'";
$GetDetails_Qry = $objCore->DBConn->GetRow($GetDetails_Qry);

$GetAffiliate_name  = "SELECT desired_username FROM user_registration WHERE id='".$_SESSION["user_id"]."'";
$GetAffiliate_name_Qry = $objCore->DBConn->GetOne($GetAffiliate_name);





if($_REQUEST[save] == 1)
$displayMsg = "Details Updated  Successfully...";

$objCore->smarty->assign(array("GetDetails_Qry" => $GetDetails_Qry, "displayMsg" => $displayMsg,"Affiliate"=>$Affiliate, "HTTP_PATH"=>HTTP_PATH,"GENDER"=>$GENDER,"NATIONALITY"=>$NATIONALITY,"GetAffiliate_name_Qry"=>$GetAffiliate_name_Qry,"account_status"=>$account_status));
$objCore->smarty->assign("id",$_GET['id']);

include "footer.php";
?>