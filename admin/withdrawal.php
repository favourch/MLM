<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="withdrawal";
$amount 	= 0;
if(isset($_POST['verify_btn'])=='Verify with Phone Number'){

$amount 	= $_POST['amount'];
$password 	=  $_POST['password'];
$details_rslt = $objCore->DBConn->GetRow("SELECT desired_username,define_password,mobile,email_address FROM user_registration WHERE id='".$user_id."' ");

if($details_rslt[define_password] == base64_encode($password)){
 	$mobile = $details_rslt[mobile];
 	$showMsg ='otpsend';
 
 		$rand  = rand();
 		$username = "bsofan";
		$pass = "admin321";
		$sender = $mobile;
		$message = "Your OTP  : '".$rand."'";
		$senderId = "MLMBit";
		$route = "A";

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 
    "http://sms.sninfotech.in/sendsms?uname=$username&pwd=$pass&senderid=$senderId&to=$sender&msg=$message&route=$route"
);
$content = curl_exec($ch);
echo $content;
 

$delete_qry = $objCore->DBConn->Execute("DELETE FROM otp WHERE user_id='".$user_id."'");

$insert_otp = $objCore->DBConn->Execute("INSERT INTO otp SET user_id='".$user_id."',otp='".$rand."',added_date = '".time()."'");

	}
	else
	{
		$showMsg ='worngpass';
	}

}

$avail_bal_rslt = $objCore->DBConn->GetRow("SELECT Total_Amount FROM profile_info WHERE user_id='".$user_id."' ");
//print_r($avail_bal_rslt);


if(isset($_POST['Withdrawal_btn'])=='Withdraw'){
	$otp_code = $_POST['otp_code'];
	$tamt = $_POST['tamt'];
	$wamt = $_POST['wamt'];
	
	$getotp = $objCore->DBConn->GetOne("SELECT otp FROM otp WHERE user_id='".$user_id."' ");
	if($getotp==$otp_code){
			$Available_Amount = $tamt - $wamt;
			
			$Update_amt = $objCore->DBConn->Execute("UPDATE profile_info SET Total_Amount ='".$Available_Amount."' WHERE user_id='".$user_id."'");
			
	$bittype = $objCore->DBConn->GetRow("SELECT bitcoin_type,email_address FROM user_registration WHERE id='".$user_id."' ");

	$withdrawal_insert = $objCore->DBConn->Execute("INSERT INTO withdrawal SET user_id='".$user_id."',type='".$bittype['bitcoin_type']."',	description='Amount Withdrawal',amount='".$wamt."',status='success',added_date='".time()."'");
	
	$showMsg ='withdraw_success';	


			//$email_to = 'ramesh.brainak@gmail.com';
			$email_to = $bittype['email_address'];

			$emailBody .='
			<b>Hi '.$details_rslt[desired_username].',</b><br>
			
			Available Amount : '.$Available_Amount.' <br>
			Withdrawn Amount : '.$wamt.' <br>
			
		
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
		}
		else
		{
			$opt_mismatch = '<div class="alert alert-danger">Sorry OTP is Invalid Please Try Again</div>';
		}
	
	}
	
/*if($_GET['msg']=='otp_mismatch'){
	$opt_mismatch = '<div class="alert alert-danger">Sorry OTP is Invalid Please Try Again</div>';
	
}*/

if($_REQUEST[save] == 1)
$showMsg = "Detail Updated Successfully...";

$objCore->smarty->assign(array('mobile'=>$mobile, 'showMsg'=>$showMsg,'avail_bal_rslt'=>$avail_bal_rslt,'amount'=>$amount,'opt_mismatch'=>$opt_mismatch));
include "footer.php";
?>