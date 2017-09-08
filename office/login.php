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

$adminlogin = "SELECT username,password FROM admin WHERE id=1" ;
$adminlogin_Qry = $objCore->DBConn->GetRow($adminlogin);

if($adminlogin_Qry['username']==$username && $adminlogin_Qry['password']== base64_encode($password)) {
	$_SESSION["admin_id"] = 'admin';
	$update_qry = $objCore->DBConn->Execute("UPDATE admin SET lastlogin='".time()."'");
	$insert_qry = $objCore->DBConn->Execute("INSERT INTO admin_session SET admin_id='1', timestamp='".time()."'");
	header("Location:index.php");
}
else
	header("Location:login.php?err=inv");

}
$objCore->smarty->assign("msg",$msg);

include_once "footer.php";
?>