<?php
include "../includes/classes/session.class.inc.php";
$sess = new SessionAdm;
if($_SESSION["user_id"]=='' && $_SESSION["admin_id"]=='')
header('Location:login.php');


/*if($_POST[login_x] == "Login")
{
	
	$admin_userid=$sess->admin_verifylogin($_POST[username],$_POST[password]);
	if(!$admin_userid)
	{
		header("Location:login.php?err=inv");
		exit;
	}
	
	
	$suspended_admin=$objCore->DBConn->GetOne("select count(*) from admin where id='$_SESSION[admin_userid]' and suspend='1' ");
	if($suspended_admin !='0')
	{
	header("Location:login.php?err=sus");
		exit;
	
	}

	
}
else
{
	$admin_userid = $_SESSION[admin_userid];
	if($admin_userid)
	{
		$sess->admin_checksession();
	}
	else
	{
		header("Location:login.php");
		exit;	
	}	
}*/

//$rs = $objCore->DBConn->GetRow("select * from admin where id='$admin_userid'") or die($db->ErrorMsg());
$objCore->smarty->assign("username",$rs[username]);
$objCore->smarty->assign("LOGIN_NAME",$rs[display_name]);
$objCore->smarty->assign("USER_TYPE",$rs[user_type]);
$objCore->smarty->assign("lastlogin",@date("l, F d, Y H:i:s", $rs[lastlogin]));
$objCore->smarty->assign("currentlogin",@date("l, F d, Y H:i:s", $rs[currentlogin]));

?>