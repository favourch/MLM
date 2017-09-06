<?php
include_once "includes.inc.php";
$page = "registration";
$place = 32;
/*
if($_GET['err']=="sus")
{
	$msg='You are Suspended Please Contact Administrator';
	
}

elseif($_GET['err']=="inv")
{
	$msg='Invalid Username and Password';
}

elseif($_GET['err']=="lgt")
{
	$msg='Logout Successfully!';
}
*/

$sponsor = $_GET['ref'];

$Getsponsor_id_Qry1  = "SELECT ur.id,ui.required_placement FROM user_registration AS ur
LEFT JOIN profile_info AS ui ON ur.id = ui.user_id
WHERE ur.desired_username= '".$sponsor."'";
$Getsponsor_id1 = $objCore->DBConn->GetRow($Getsponsor_id_Qry1);
$sponsor_id = $Getsponsor_id1['id'];
$placement_req = $Getsponsor_id1['required_placement'];


$objCore->regressiveForPlacement('one',$sponsor_id,$placement_req);
//$place1 = json_decode($place);
//echo json_decode($place);die;
print_r($_SESSION['placement_id_recursive']);

$PLACEMENT_ID1 = $_SESSION['placement_id_recursive'];






if(isset($_POST[reg_btn])=='Register') {

	$setfld = "desired_username='".$_POST[desired_username]."'";
	$setfld .= ", your_fullname='".$_POST[your_fullname]."'";
	$setfld .= ", mobile='".$_POST[mobile]."'";
	$setfld .= ", define_password=md5('".$_POST[define_password]."')";
	$setfld .= ", email_address='".$_POST[email_address]."'";
	$setfld .= ", sponsor='".$_POST[sponsor]."'";
	$setfld .= ", placement_id='".$_POST[placement_id]."'";
	$setfld .= ", placement='".$_POST[placement]."'";
	$setfld .= ", bitcoin_address='".$_POST[bitcoin_address]."'";
	$setfld .= ", added_date='".time()."'";
	
	
	$insert_register_info = "INSERT INTO user_registration SET $setfld";
	$objCore->DBConn->Execute($insert_register_info);

	$userid = $objCore->DBConn->Insert_ID();
	$insert_profile_info = "INSERT INTO profile_info SET user_id='".$userid."',	fname='".$_POST[your_fullname]."',email='".$_POST[email_address]."',added_date='".time()."'";
	$objCore->DBConn->Execute($insert_profile_info);
	
	if($_POST[sponsor] !=''){
		
	$Getsponsor_id_Qry  = "SELECT id FROM user_registration WHERE desired_username='".$_POST[placement_id]."'";
	$Getsponsor_id = $objCore->DBConn->GetOne($Getsponsor_id_Qry);	
		
	$insert_relation = "INSERT INTO relations SET parent_id='".$Getsponsor_id."',child_id='".$userid."',placement='".$_POST[placement]."' ,sponser_id = '".$_POST[sponsor]."'";
	$objCore->DBConn->Execute($insert_relation);
	}
	header("Location:login.php?err=success");
	}

$objCore->smarty->assign("msg",$msg);
$objCore->smarty->assign("sponsor",$sponsor);
$objCore->smarty->assign("PLACEMENT",$placement_req);
$objCore->smarty->assign("PLACEMENT_ID",$PLACEMENT_ID1);



include_once "footer.php";
?>