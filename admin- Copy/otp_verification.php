<?php
include_once "includes.inc.php";
$page = "otp_verification";

$userid = $_GET['userid'];


$getmobile = "SELECT mobile FROM user_registration WHERE id='".$userid."'" ;
$MobileNumber = $objCore->DBConn->GetOne($getmobile);


if(isset($_POST[verify_x])=='Verify') {
	
$userotp = $_POST['userotp'];


$getotp = "SELECT otp FROM otp WHERE user_id='".$userid."' ORDER BY id DESC"  ;
$getotp_Qry = $objCore->DBConn->GetOne($getotp);

//<p>Password : '.$getuserdetails[define_password].'</p>
if($userotp == $getotp_Qry){
	$update_verify = $objCore->DBConn->Execute("UPDATE user_registration SET verified_status='1' WHERE id='".$userid."'");
	
	$getuserdetails = $objCore->DBConn->GetRow("SELECT your_fullname,desired_username,define_password,email_address FROM user_registration WHERE id='".$userid."'" );
	
			//$email_to = 'ramesh.brainak@gmail.com';
			$email_to = $getuserdetails[email_address];

			$emailBody .='
			<b>Hi '.$getuserdetails[your_fullname].',Your Account Has Been Activated Successfully .</b><br>
			<p>User Name : '.$getuserdetails[desired_username].'</p>
			<p>Password : '.base64_decode($getuserdetails[define_password]).'</p>
			
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
	
	header("Location:login.php?err=success");
}
else{
header("Location:otp_verification.php?err=fail&userid=".$userid );
exit;
}

}
elseif($_GET[err] !='fail') {
	if($userid !=''){
 		$rand  = rand(1000,10000);
		$username = "bsofan";
		$pass = "admin321";
		$sender = $MobileNumber;
		$message = "Your Activation OTP for the account is : '".$rand."'";
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

$insert_otp = "INSERT INTO otp SET 	user_id='".$userid."',otp='".$rand."',added_date = '".time()."'";
$objCore->DBConn->Execute($insert_otp);
}

}


if($_GET['err']=="fail")
{
	$msg='Wrong OTP, Please Try Again';
	
}
$objCore->smarty->assign("msg",$msg);

include_once "footer.php";
?>