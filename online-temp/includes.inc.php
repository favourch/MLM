<?php
ob_start();
session_start();
include "../includes/config.inc.php";
include "../includes/classes/master.class.inc.php";

$objCore = new corefunction;

#============= General Settings ===============#
define("DOMAIN_NAME",	 	$objCore->DBConn->GetOne("SELECT website_name FROM admin WHERE id='1'"));
define("DOMAIN_URL", 	$objCore->DBConn->GetOne("SELECT website_url from admin WHERE id='1'"));
define("FROM_EMAIL", 	$objCore->DBConn->GetOne("SELECT email from admin WHERE id='1'"));
define("LAST_LOGIN", 	$objCore->DBConn->GetOne("SELECT lastlogin from admin WHERE id='1'"));
#============= General Settings ===============#

$objCore->smarty->assign("DOMAIN_NAME",DOMAIN_NAME);
$objCore->smarty->assign("DOMAIN_URL",DOMAIN_NAME);
$objCore->smarty->assign("FROM_EMAIL",FROM_EMAIL);	
$objCore->smarty->assign("CUR",CUR);



$objCore->smarty->assign("current_servertime",@date("l, F d, Y H:i:s"));
$lastLogin = @date("l, F d, Y H:i", LAST_LOGIN);

$content_rslt = $objCore->DBConn->GetArray("SELECT id,label,title FROM site_contents WHERE module='1' ORDER BY id ASC");
$objCore->smarty->assign(array('content_rslt' => $content_rslt, "lastLogin" => $lastLogin, "CURRENCY" => CURRENCY));
?>