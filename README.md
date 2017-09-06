# MLM

##Changes to be done in config file
config.inc

define('BASEDIR',                   'Your_path'. DIRECTORY_SEPARATOR);
define('CUR',                   'INR ');

#========= Website Root & HTTP Paths ============#
define("ROOT_PATH", "Your_path");
define("HTTP_PATH", "Your_path");




#======== DB for payment =========#
 define("DB_HOST", 	"");				// hostname
 define("DB_USER", 	"");		// database username
 define("DB_PASSWORD", 	"");		// database password
 define("DB_NAME", 	"");	// database name
 
 
 
 #======== Payment receiving for bitcoin==========#
 
 ####pay-per-membership.phoo
 	/**** CONFIGURATION VARIABLES ****/ 
	
	$userID 		= "";							// place your registered userID or md5(userID) here (user1, user7, ko43DC, etc).
													// your user should have already registered on your website before   
	$userFormat		= "COOKIE";						// this variable ignored when you use $userID 
	$orderID 		= "premium_membership";			// premium membership order
	$amountUSD		= "1";							// price per membership - 79 USD
	$period			= "1 MINUTE";					// one month membership; after need to pay again
	$def_language	= "en";				// default Payment Box Language
	$public_key		= ""; // from gourl.io
	$private_key	= "";// from gourl.io
