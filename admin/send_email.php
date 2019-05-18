<?php
include_once "includes.inc.php";
include_once "session.inc.php";
$page="send_email";

if($_GET['action'] == "delete") {
	$del_qry = "DELETE FROM contact_us WHERE id='".$_GET['id']."'";
	$objCore->DBConn->Execute($del_qry);
	$showMsg = "<div class='informasi'>Deleted sucessfully.</div>";
}


if($_POST['email_send_btn']=='Submit')
{
			$email_to = 'ramesh14btech@gmail.com';
		/*	$email_to1 = 'info@hotelcitytower.com';
			$email_to2 = 'reservation@hotelmangalainternational.in';
			$email_to3 = 'hotelraamus@gmail.com';
			$email_to4 = 'info@rathnaresidency.com';
			$email_to5 = 'hotelsreemurugan@gmail.com';
			$email_to6 = 'naveenhotel@gmail.com';*/
			
			
			$emailBody .='
			
		<div class="main" style="width:55%; background:#CE272F">
		<div class="header" style="background:#EA8740; color:#FFF; padding-top:15px; padding-bottom:15px;; font-size:24px; font-variant:small-caps">
			<center><b>Brainak System Technologies Pvt Ltd</b></center>
		</div>
      	<img src='.HTTP_PATH.'admin/img/web_offer.jpg width="600px" >
		<div class="bottom"  style="text-align:center; padding-top:5px; padding-bottom:5px">visit out site <a href="http://brainak.com/" target="_blank" style=" text-decoration:none">www.brainak.com</a></div>
		</div>
		
		
		
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
			 mail($email_to1, $subject, $emailBody, $headers);	
			 mail($email_to2, $subject, $emailBody, $headers);
			 mail($email_to3, $subject, $emailBody, $headers);
			 mail($email_to4, $subject, $emailBody, $headers);
			 mail($email_to5, $subject, $emailBody, $headers);
			 mail($email_to6, $subject, $emailBody, $headers);		
			 ?>
             <script>alert("Mail Send Success");</script>
             <?php

}


$objCore->smarty->assign('showMsg',$showMsg);

include "footer.php";
?>