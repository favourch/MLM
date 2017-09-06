<?php
/**
 * @category    Example11 - Pay-Per-Membership (single crypto currency in payment box)
 * @package     GoUrl Cryptocurrency Payment API 
 * copyright 	(c) 2014-2017 Delta Consultants
 * @crypto      Supported Cryptocoins -	Bitcoin, BitcoinCash, Litecoin, Dash, Dogecoin, Speedcoin, Reddcoin, Potcoin, Feathercoin, Vertcoin, Peercoin, MonetaryUnit
 * @website     https://gourl.io/bitcoin-payment-gateway-api.html#p6
 * @live_demo   https://gourl.io/lib/examples/pay-per-membership.php
 */ 

	require_once( "cryptobox.class.php" );
	$converted_amount = 0;
	if(isset($_POST['PayWithBitcoin'])=='Pay_With_Bitcoin'){
	
	
	$converted_amount = convert_currency_live('BTC','USD',$_POST['amount']);
	//echo $converted_amount;die;
	}		
	
	/* if(isset($_POST[PayWithBitcoin])=='Pay_With_Bitcoin') {
		$amount1 =$_POST[amount];
		alert($amount1);
		$converted_amount = convert_currency_live('BTC','USD',$amount1);
		} */
	/**** CONFIGURATION VARIABLES ****/ 
	
	$userID 		= "$_SESSION["user_id"]";							// place your registered userID or md5(userID) here (user1, user7, ko43DC, etc).
													// your user should have already registered on your website before   
	$userFormat		= "COOKIE";						// this variable ignored when you use $userID 
	$orderID 		= "premium_membership";			// premium membership order
	$amountUSD		= "$converted_amount";							// price per membership - 79 USD
	$period			= "1 MINUTE";					// one month membership; after need to pay again
	$def_language	= "en";				// default Payment Box Language
	$public_key		= "14625AA81Fn9Bitcoin77BTCPUBnMCnWTGrmnz6HU31FlkaNES"; // from gourl.io
	$private_key	= "14625AA81Fn9Bitcoin77BTCPRVfjomGq2yD0X6lNDa0lAKzst";// from gourl.io

	// IMPORTANT: Please read description of options here - https://gourl.io/api-php.html#options  
	
	/********************************/


	
	
	
	/** PAYMENT BOX **/
	$options = array(
			"public_key"  => $public_key, 	// your public key from gourl.io
			"private_key" => $private_key, 	// your private key from gourl.io
			"webdev_key"  => "", 		// optional, gourl affiliate key
			"orderID"     => $orderID, 		// order id
			"userID"      => $userID, 		// unique identifier for every user
			"userFormat"  => $userFormat, 	// save userID in COOKIE, IPADDRESS or SESSION
			"amount"   	  => 0,				// price in coins OR in USD below
			"amountUSD"   => $amountUSD,	// we use price in USD
			"period"      => $period, 		// payment valid period
			"language"	  => $def_language  // text on EN - english, FR - french, etc
	);

	// Initialise Payment Class
	$box = new Cryptobox ($options);
	
	// coin name
	$coinName = $box->coin_name(); 
	
	$box->cryptobox_new_payment();
	// Successful Cryptocoin Payment received
	// Please use also IPN function cryptobox_new_payment($paymentID = 0, $payment_details = array(), $box_status = "") for update db records, etc
	if ($box->is_paid())
	{
		// one time action
		if (!$box->is_processed())
		{
			// One time action after payment has been made
					
			$message = "Thank you (order #".$orderID.", payment #".$box->payment_id().").";
	
			// Set Payment Status to Processed
			$box->set_status_processed();
			//update status
			//$objCore->Updatestatus($box->payment_id());
			$objCore->Updatestatus($box->payment_id());
			

			//sponsor bonus calculations
			$box->cryptobox_reset();
			
			
			
		}
		else $message = "Successfull.Do the next Deposit after sometimes";
	}
	
	
	// Optional - Language selection list for payment box (html code)
	$languages_list = display_language_box($def_language);





	// ...
	// Also you need to use IPN function cryptobox_new_payment($paymentID = 0, $payment_details = array(), $box_status = "") 
	// for send confirmation email, update database, update user membership, etc.
	// You need to modify file - cryptobox.newpayment.php, read more - https://gourl.io/api-php.html#ipn
	// ...
		
	
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<title><?php echo $coinName; ?> Pay-Per-Membership Cryptocoin Payment Example</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='Expires' content='-1'>
<meta name='robots' content='all'>
<script src='js/New folder/cryptobox.min.js' type='text/javascript'></script>
</head>
<body style='font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#666;margin:0'>
<div align='center'>
<br>
<h1>Depositing the Amount</h1><!-- Awaiting Payment -->
	


	<div style='font-size:12px;margin:50px 0 5px 370px'>Language: &#160; <?php echo $languages_list; ?></div>
	<?php echo $box->display_cryptobox(true, 540, 230, "padding:3px 6px;margin:10px;border:10px solid #f7f5f2;"); ?>

	
</div><br><br><br><br><br><br>
<?php if ($box->is_paid()): ?>

	<!-- Successful Cryptocoin Payment received -->
	<!-- You can use the same payment gateway code for few your pages (section1) -->	 
	<!-- Your Premium Page(s) Code  -->
	 
	<h2 style='color:#339e2e;'>Payment received<br>
	
	
	</h2>
<?php endif ?>

</body>
</html>