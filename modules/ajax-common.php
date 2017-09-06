
<?php
//include_once "includes.inc.php";


if($_GET[action]=='sendmessage')
{

	$setFld   =  "  name='".$_POST[name]."'";
	$setFld  .=  ", email_id='".$_POST[email_id]."'";
	$setFld  .=  ", mobile_number='".$_POST[mobile_number]."'";
	$setFld  .=  ", message='".$_POST[message]."'";
    $setFld  .=  ", type='".$_POST[page_type]."'";
			
			
		$contact_data = $objbrainak->DBConn->Execute("INSERT INTO contact_us SET $setFld, added_date='".time()."'");
		
		if($contact_data)
		{
			//$email_to = 'ramesh.k@brainak.com';
			$email_to = 'ramesh14btech@gmail.com';
			
			$emailBody ="You have received a message from  $_POST[page_type] Page of ".DOMAIN_NAME." <br><br>";
			$emailBody .="MESSAGE DETAILS<br><br>
			
			Name : $_POST[name] <br>
			Email : $_POST[email_id]<br>
			Mobile Number : $_POST[mobile_number] <br>
			Message Of $_POST[name] : $_POST[message] <br><br>
			IP : '".$_SERVER['REMOTE_ADDR']."'
			\<br>
		
			Thank you<br>
			".DOMAIN_NAME."<br>
			Web Team.
			";
			
			$headers  = "MIME-Version: 1.0" .  "\r\n";
			$headers .= "Content-type: text/html; charset=utf-8;" . "\r\n";
			$headers .= "From:Brainak Technologies<noreply@brainak.com> \r\n";
			$headers .= "Reply-To: $email_id\r\n";
			$headers .= "Return-Path: brainakinfo@gmail.com\r\n";
			$headers .= "X-Mailer: PHP\r\n";
		
			$subject = "Contact From ".DOMAIN_NAME." Website";
			
			 mail($email_to, $subject, $emailBody, $headers);	
		}
		
		echo json_encode("SUCCESS");
	
}


if($_GET[action]=='viewproduct'){
	
	$setFld   =  "  name='".$_POST[name]."'";
	$setFld  .=  ", email_id='".$_POST[email_id]."'";
	$setFld  .=  ", mobile_number='".$_POST[mobile_number]."'";
    $setFld  .=  ", type='".$_POST[page_type]."'";
	$contact_data = $objbrainak->DBConn->Execute("INSERT INTO contact_us SET $setFld, added_date='".time()."'");
	if($contact_data)
	echo json_encode("SUCCESS");
}




/*if($statusavailable)
		{
			//$email_to = 'bagavathiloadtaxi@gmail.com';
            //$email_to1 = 'balarkssch@gmail.com';
			$email_to = 'ramesh14btech@gmail.com';
			
			$emailBody ="message from Mannual Booking<br><br>";
			$emailBody .="MESSAGE DETAILS<br><br>
			
			Name : $_POST[name] <br>
			Email : $_POST[email_id]<br>
			Mobile Number : $_POST[mobile_number] <br>
			Message Of $_POST[name] : $_POST[message] <br><br>
			IP : '".$_SERVER['REMOTE_ADDR']."'
			\<br>
		
			Thank you<br>
			".DOMAIN_NAME."<br>
			Web Team.
			";
			
			$headers  = "MIME-Version: 1.0" .  "\r\n";
			$headers .= "Content-type: text/html; charset=utf-8;" . "\r\n";
			$headers .= "From:Brainak Technologies<noreply@brainak.com> \r\n";
			$headers .= "Reply-To: $email_id\r\n";
			$headers .= "Return-Path: infobrainak@gmail.com\r\n";
			$headers .= "X-Mailer: PHP\r\n";
		
			$subject = "Contact From ".DOMAIN_NAME." Website";
			
			 mail($email_to, $subject, $emailBody, $headers);	
		}*/
?>

