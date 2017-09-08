<?php
#============= Session Msg ===============#
if($_SESSION[a_msg] != "")
{
	$objCore->smarty->assign("msg",$_SESSION[a_msg]);
	$_SESSION[a_msg] = "";
}
#============= Session Msg ===============#
$admin_arr = $objCore->DBConn->GetRow("select * from admin where id='1'");

$objCore->smarty->assign("admin_arr",$admin_arr);
$objCore->smarty->assign("page",$page);
$objCore->smarty->display("office/$page.tpl");
?>