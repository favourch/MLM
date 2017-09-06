<?php
ob_start();
session_start();
include "includes/config.inc.php";
include "includes/classes/master.class.inc.php";

$objbrainak = new corefunction;

#============= General Settings ===============#
define("SITE_NAME",	 	$objbrainak->DBConn->GetOne("SELECT website_name FROM admin WHERE id='1'"));
define("DOMAIN_NAME", 	$objbrainak->DBConn->GetOne("SELECT website_url from admin WHERE id='1'"));
define("FROM_EMAIL", 	$objbrainak->DBConn->GetOne("SELECT email from admin WHERE id='1'"));
#============= General Settings ===============#

$objbrainak->smarty->assign("SITE_NAME",SITE_NAME);
$objbrainak->smarty->assign("DOMAIN_NAME",DOMAIN_NAME);
$objbrainak->smarty->assign("FROM_EMAIL",FROM_EMAIL);	

//echo $_GET[seo_url];

$fileNamInc  =$_SERVER['PHP_SELF'];
$pathPartsInc= pathinfo($fileNamInc);
$pageName = $pathPartsInc["basename"];
define("pageName", $pathPartsInc["basename"]);

$user_id = $_SESSION["user_id"];	







$objbrainak->smarty->assign(array(
"HTTP_PATH"					=> HTTP_PATH,
"pageName"					=> $pageName,
"user_ID"					=> $user_ID,
"admin_id"					=>	$_SESSION["admin_id"],
));



?>