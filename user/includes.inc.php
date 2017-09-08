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
$objCore->smarty->assign("LAST_LOGIN",LAST_LOGIN);	
$objCore->smarty->assign("CUR",CUR);
$user_id = $_SESSION["user_id"];
$admin_id = $_SESSION["admin_id"];



$GetDownline = $objCore->DBConn->GetArray("SELECT B.DESIRED_USERNAME, 
       (SELECT X.DESIRED_USERNAME FROM USER_REGISTRATION X WHERE X.ID =A.PARENT_ID) PLACEMENT,
       (SELECT X.DESIRED_USERNAME FROM USER_REGISTRATION X WHERE X.ID =A.SPONSER_ID) SPONSER,
       
       (SELECT X.deposit_amount FROM PROFILE_INFO X WHERE X.ID =A.CHILD_ID) deposit_amount,
        A.LEG,
       (SELECT X.ADDED_DATE FROM PROFILE_INFO X WHERE X.ID =A.CHILD_ID) ADDED_DATE
FROM PARENT_CHILD_LINKAGE A, USER_REGISTRATION B
WHERE A.CHILD_ID = B.ID");

$downline_count = count($GetDownline);
$GetDownline = $objCore->DBConn->GetOne("SELECT COUNT(*) FROM relations WHERE sponser_id='".$user_id."'");





$last_login = date('d/m/Y H:i:s', LAST_LOGIN);

$UserName = $objCore->DBConn->GetOne("SELECT your_fullname FROM user_registration WHERE id='".$user_id."'");

$objCore->smarty->assign("current_servertime",@date("l, F d, Y H:i:s"));
$lastLogin = @date("l, F d, Y H:i", LAST_LOGIN);

$content_rslt = $objCore->DBConn->GetArray("SELECT id,label,title FROM site_contents WHERE module='1' ORDER BY id ASC");
$objCore->smarty->assign(array('UserName' => $UserName,'last_login' => $last_login,  "CURRENCY" => CURRENCY,"admin_id"=>$_SESSION["admin_id"],"downline_count"=>$downline_count,"GetDownline"=>$GetDownline));
?>