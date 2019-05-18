<?php
include_once "includes.inc.php";
$page = "registration";

$sponsor = 0;
$sponsor = $_GET['ref'];
//echo $sponsor;die;
if($_GET['ref'] == ''){
	$woref = "Direct_Company";
	$sponsor = $objCore->DBConn->GetOne("SELECT desired_username from user_registration where id = 1");

}
//echo $woref;die;
//echo $sponsor;
$Getsponsor_id_Qry1  = "SELECT ur.id,ui.required_placement FROM user_registration AS ur
LEFT JOIN profile_info AS ui ON ur.id = ui.user_id
WHERE ur.desired_username= '".$sponsor."'";
$Getsponsor_id1 = $objCore->DBConn->GetRow($Getsponsor_id_Qry1);
$sponsor_id = $Getsponsor_id1['id'];
$placement_req = $Getsponsor_id1['required_placement'];


$objCore->regressiveForPlacement('one',$sponsor_id,$placement_req);
//$place1 = json_decode($place);
//echo json_decode($place);die;
//print_r($_SESSION['placement_id_recursive']);

    $PLACEMENT_ID1 = $_SESSION['placement_id_recursive'];
	$Getplacement_name  = "SELECT desired_username FROM user_registration WHERE id='".$PLACEMENT_ID1."'";
	$placement_name = $objCore->DBConn->GetOne($Getplacement_name);	
	//echo $placement_name;die;



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
	
	//SMS DETAILS
	   
	$insert_register_info = "INSERT INTO user_registration SET $setfld";
	$objCore->DBConn->Execute($insert_register_info);

	$userid = $objCore->DBConn->Insert_ID();
	
	
	$insert_profile_info = "INSERT INTO profile_info SET user_id='".$userid."',	fname='".$_POST[your_fullname]."',email='".$_POST[email_address]."',added_date='".time()."'";
	$objCore->DBConn->Execute($insert_profile_info);
	
	if($_POST[sponsor] ==''){
		$insert_relation = "INSERT INTO relations SET parent_id='0',child_id='".$userid."',placement='' ,sponser_id = '0'";	
		$objCore->DBConn->Execute($insert_relation);
	
	}
	$sponsor_id = $objCore->DBConn->GetOne("SELECT id from user_registration where desired_username = '".$_POST[sponsor]."'");
	//echo  $sponsor_id;die;
	$Getsponsor_id_Qry  = "SELECT id FROM user_registration WHERE desired_username='".$_POST[placement_id]."'";
	$Getsponsor_id = $objCore->DBConn->GetOne($Getsponsor_id_Qry);	
		
	$insert_relation = "INSERT INTO relations SET parent_id='".$Getsponsor_id."',child_id='".$userid."',placement='".$_POST[placement]."' ,sponser_id = '".$sponsor_id."'";
	//echo $insert_relation;die;
	$objCore->DBConn->Execute($insert_relation);
	//MAIL OTP VERIFICATION
			//$email_to = 'ramesh.brainak@gmail.com';
			$email_to = $_POST[email_address];

			$emailBody .='
			<b>Hi '.$_POST[your_fullname].',</b><br>
			<p>Please click below link to verify your mobile number</p>
			<a target="_blank" href="'.HTTP_PATH.'admin/otp_verification.php?userid='.$userid.'">Send OTP</a><br><br>
		
			Thank you<br>
			
			Web Team.
			';
			
			$headers  = "MIME-Version: 1.0" .  "\r\n";
			$headers .= "Content-type: text/html; charset=utf-8;" . "\r\n";
			$headers .= "From:Brainak Technologies<noreply@brainak.com> \r\n";
			$headers .= "Reply-To: $email_id\r\n";
			$headers .= "Return-Path: brainakinfo@gmail.com\r\n";
			$headers .= "X-Mailer: PHP\r\n";
		
			$subject = "Contact From ".DOMAIN_NAME." Website";
			
		mail($email_to, $subject, $emailBody, $headers);	

	header("Location:registration.php?OtpMail=Mail");
	}
	

$objCore->smarty->assign("msg",$msg);
$objCore->smarty->assign("sponsor",$sponsor);
$objCore->smarty->assign("PLACEMENT",$placement_req);
$objCore->smarty->assign("PLACEMENT_ID",$PLACEMENT_ID1);
$objCore->smarty->assign("placement_name",$placement_name);
$objCore->smarty->assign("MAilCheck",$_GET['OtpMail']);
$objCore->smarty->assign("woref",$woref);




include_once "footer.php";
?>