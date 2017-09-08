<?php
ob_start();
include_once "includes.inc.php";
include_once "session.inc.php";
$page="general-settings";

if($_POST['submit'] == "Submit")
{
	 $upd_qry = "update admin set website_url='$_POST[weburl]', website_name='$_POST[website_name]' where id='1'";
	 
	$objCore->DBConn->Execute($upd_qry);

	$_SESSION[a_msg] = EDIT_MSG;
	header("Location: general-settings.php");
	exit;
}
$gen_qry = "select * from admin where id='1'";
$gen_detail = $objCore->DBConn->GetRow($gen_qry);
$objCore->smarty->assign("gen_detail",$gen_detail);
include "footer.php";

?>