<?php
ob_start();
include_once "includes.inc.php";
include_once "session.inc.php";


@EXTRACT($_POST);
@EXTRACT($_GET);

$page="add_package";

//$mod = isset($_GET[mod]) ? $_GET[mod] : 1;


if($_GET['act']=="delete"){
$getImg = $objCore->DBConn->GetRow("select image from experts where id='".$_GET['id']."'");
$exisitngImage = $getImg['image'];
@unlink(profile_upload_path.$exisitngImage);
$delete_qry = "UPDATE experts set image='' WHERE id='".$_GET['id']."'";
$objCore->DBConn->Execute($delete_qry);
header("location: add-experts.php?id=".$_GET['id']);
exit;
}


if($_POST['submit_plan'] == "Submit")
{
	$setfld = "	plan_name='".$_POST[plan_name]."'";
	$setfld .= ", min='".$_POST[min]."'";
	$setfld .= ", max='".$_POST[max]."'";
	$setfld .= ", profit_term='".$_POST[profit_term]."'";
	$setfld .= ", sponsor_bonus='".$_POST[sponsor_bonus]."'";
	$setfld .= ", paring_bonus='".$_POST[paring_bonus]."'";
	$setfld .= ", bg_color='".$_POST[bg_color]."'";
	$setfld .= ", status='".$_POST[status]."'";

	$setfld .= ", added_date='".time()."'";

	$exist = $objCore->DBConn->GetOne("SELECT plan_id FROM plan_info WHERE plan_id='".$_REQUEST['plan_id']."'");

	if($exist == $_REQUEST[plan_id] && $_REQUEST[plan_id] != ""){
		
		$update_content_qry = $objCore->DBConn->Execute("UPDATE plan_info SET $setfld  WHERE plan_id='".$_REQUEST['plan_id']."'");

	}else{
		$update_content_qry = $objCore->DBConn->Execute("INSERT INTO plan_info SET $setfld");
		
	}	
	header("Location:package.php?save=1");
	exit;
}



$Plan_Qry = "SELECT * FROM plan_info WHERE plan_id='".$_GET['plan_id']."'";
$GetPlan_Qry = $objCore->DBConn->GetRow($Plan_Qry);
//print_r($GetPlan_Qry);





if($_REQUEST[save] == 1)
$displayMsg = "Details Updated  Successfully...";

$objCore->smarty->assign(array("GetUser_Qry" => $GetUser_Qry, "displayMsg" => $displayMsg,"GetPlan_Qry"=>$GetPlan_Qry, "HTTP_PATH"=>HTTP_PATH,"GENDER"=>$GENDER ,"NATIONALITY"=>$NATIONALITY,"PACKAGE_STATUS"=>$PACKAGE_STATUS));
$objCore->smarty->assign("id",$_GET['id']);

include "footer.php";
?>