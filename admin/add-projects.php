<?php
ob_start();
include_once "includes.inc.php";
include_once "session.inc.php";


@EXTRACT($_POST);
@EXTRACT($_GET);

$page="add-projects";

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


if($_POST['submit_project'] == "Submit")
{
//print_r($_POST);exit;
	$setfld = "project_name='".$_POST[project_name]."'";
	$setfld .= ", specification='".$_POST[specification]."'";
	$setfld .= ", undertaken_by='".$_POST[undertaken_by]."'";
	$setfld .= ", project_description='".$objCore->magic_quotes($_POST[project_description])."'";
	$setfld .= ", duration='".$_POST[duration]."'";
	$setfld .= ", initial_cost_paid='".$_POST[initial_cost_paid]."'";
	$setfld .= ", total_cost='".$_POST[total_cost]."'";
	$setfld .= ", month_committed='".$_POST[month_committed]."'";
	$setfld .= ", started_date='".$_POST[started_date]."'";
	$setfld .= ", deadline='".$_POST[deadline]."'";
	$setfld .= ", reference='".$_POST[reference]."'";
	$setfld .= ", project_status='".$_POST[project_status]."'";
	$setfld .= ", payment_status='".$_POST[payment_status]."'";
	$setfld .= ", project_type='".$_POST[project_type]."'";
	$setfld .= ", cname='".$_POST[cname]."'";
	$setfld .= ", cmobile_number='".$_POST[cmobile_number]."'";
	$setfld .= ", cemail_id='".$_POST[cemail_id]."'";
	$setfld .= ", cskype_id='".$_POST[cskype_id]."'";
	$setfld .= ", organization_name='".$_POST[organization_name]."'";
	$setfld .= ", clocation='".$_POST[clocation]."'";
	$setfld .= ", live_url='".$_POST[live_url]."'";
	$setfld .= ", added_date='".time()."'";

	//$status = $_POST[status];

	$exist = $objCore->DBConn->GetOne("SELECT id FROM projects WHERE id='".$_REQUEST['id']."'");

	

	
	if($exist == $_REQUEST[id] && $_REQUEST[id] != ""){
		
		$update_content_qry = "UPDATE projects SET $setfld $set1 where id='".$_REQUEST['id']."'";
	}else{
		$update_content_qry = "INSERT into projects SET $setfld $set1";
	}	
		
	//echo $update_content_qry;
	
	$objCore->DBConn->Execute($update_content_qry);
	
	header("Location:projects.php?save=1");
	exit;
}

$GetDetails_Qry = "SELECT * FROM projects WHERE id='".$_GET['id']."'";
$GetDetails_Qry = $objCore->DBConn->GetRow($GetDetails_Qry);





if($_REQUEST[save] == 1)
$displayMsg = "Details Updated  Successfully...";

$objCore->smarty->assign(array("GetDetails_Qry" => $GetDetails_Qry, "displayMsg" => $displayMsg,"ImageFile"=>$ImageFile, "HTTP_PATH"=>HTTP_PATH,"EMP_STATUS"=>$EMP_STATUS,"PROJECT_STATUS"=>$PROJECT_STATUS,"PAYMENT_STATUS"=>$PAYMENT_STATUS,"PROJECT_TYPE"=>$PROJECT_TYPE,"MONTH_ARRAY"=>$MONTH_ARRAY));
$objCore->smarty->assign("id",$_GET['id']);

include "footer.php";
?>