<?php
include_once "includes.inc.php";
$page = "login";
session_start();



if($_GET['err']=="sus")
{
	$msg='You are Suspended Please Contact Administrator';
	
}

elseif($_GET['err']=="inv")
{
	$msg='Invalid Username and Password';
}

elseif($_GET['err']=="lgt")
{
	$msg='Logout Successfully!';
}
elseif($_GET['err']=="success")
{
	$msg='Account Created Successfully!';
}


print_r($adminlogin_Qry);


if(isset($_POST[login_x])=='Login') {
	
$username = $_POST['username'];
$password = $_POST['password'];


$loginselect = "SELECT * FROM user_registration WHERE desired_username = '".$username."' AND define_password = '".base64_encode($password)."'" ;
$loginselect_Qry = $objCore->DBConn->GetArray($loginselect);

if($loginselect_Qry[0][id]!=''){
	$_SESSION["user_id"] = $loginselect_Qry[0][id];
	$time=time();
	$insert_qry = "INSERT into user_session SET user_id='".$_SESSION["user_id"]."',timestamp='".$time."'";
	$objCore->DBConn->Execute($insert_qry);
	header("Location:index.php");
	exit();
	}else
	{
		header("Location:login.php?err=inv");
		}
}

$objCore->smarty->assign("msg",$msg);

include_once "footer.php";
?>