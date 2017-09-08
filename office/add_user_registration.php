<?php
ob_start();
include_once "includes.inc.php";
include_once "session.inc.php";


@EXTRACT($_POST);
@EXTRACT($_GET);

$page="add_user_registration";

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


if($_POST['submit_user'] == "Submit")
{
//print_r($_POST);exit;
	$setfld = "	your_fullname='".$_POST[fname]."'";
	$setfld .= ", mobile='".$_POST[mobile]."'";
	$setfld .= ", email_address='".$_POST[email]."'";
	$setfld .= ", sponsor='".$_POST[sponser]."'";
	$setfld .= ", placement_id='".$_POST[placement_id]."'";
	$setfld .= ", bitcoin_address='".$_POST[bitcoinaddress]."'";
	$setfld .= ", blockstatus='".$_POST[blockstatus]."'";

	

	
	$setfld1 = " gender='".$_POST[gender]."'";
	$setfld1 .= ", dob='".$_POST[dob]."'";
	$setfld1 .= ", passport='".$_POST[passport]."'";
	$setfld1 .= ", nationality='".$_POST[nationility]."'";
	$setfld1 .= ", address='".$_POST[address]."'";
	$setfld1 .= ", street='".$_POST[street]."'";
	$setfld1 .= ", city='".$_POST[city]."'";
	$setfld1 .= ", postal_code='".$_POST[postalcode]."'";
	$setfld1 .= ", required_placement='".$_POST[required_placement]."'";
	
	
	
	//$setfld .= ", added_date='".time()."'";

	//$status = $_POST[status];

	$exist = $objCore->DBConn->GetOne("SELECT id FROM user_registration WHERE id='".$_REQUEST['id']."'");

	
	if($exist == $_REQUEST[id] && $_REQUEST[id] != ""){
		
		$update_content_qry = $objCore->DBConn->Execute("UPDATE user_registration SET $setfld  where id='".$_REQUEST['id']."'");
		$update_content_qry1 = $objCore->DBConn->Execute("UPDATE profile_info SET $setfld1  where id='".$_REQUEST['id']."'"); 

	}else{
		$update_content_qry = $objCore->DBConn->Execute("INSERT into user_registration SET $setfld ");
		$update_content_qry1 = $objCore->DBConn->Execute("INSERT into profile_info SET $setfld1 ");
	}	
		
	//echo $update_content_qry;

	
//	header("Location:user_registration.php?save=1");
	//exit;
}



$UserDetails_Qry = "SELECT * FROM user_registration a, profile_info b WHERE a.id='".$_GET['id']."' and a.id=b.user_id";
$GetUser_Qry = $objCore->DBConn->GetRow($UserDetails_Qry);
//print_r($GetUser_Qry);





if($_REQUEST[save] == 1)
$displayMsg = "Details Updated  Successfully...";

$objCore->smarty->assign(array("GetUser_Qry" => $GetUser_Qry, "displayMsg" => $displayMsg,"ImageFile"=>$ImageFile, "HTTP_PATH"=>HTTP_PATH,"EMP_STATUS"=>$EMP_STATUS,"PROJECT_STATUS"=>$PROJECT_STATUS,"GENDER"=>$GENDER ,"NATIONALITY"=>$NATIONALITY,"MONTH_ARRAY"=>$MONTH_ARRAY,"BLOCKSTATUS"=>$BLOCKSTATUS,"Block_status"=>$GetUser_Qry[blockstatus]));
$objCore->smarty->assign("id",$_GET['id']);

include "footer.php";
?>