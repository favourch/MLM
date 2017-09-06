<?php
include_once "includes.inc.php";
include_once "session.inc.php";

if($_SESSION["user_id"]=='' && $_SESSION["admin_id"]=='')
header('Location:login.php');


 echo $_SESSION["admin_id"];

$page = "index";

$admin_arr 		= $objCore->DBConn->GetRow("select * from admin where id='1'");



$gettotalexperts 		= $objCore->DBConn->GetOne("select count(*) from experts");
$getprojectpending 		= $objCore->DBConn->GetOne("select count(*) from projects  WHERE project_status ='InProgress'");
$getprojectcompleted 		= $objCore->DBConn->GetOne("select count(*) from projects  WHERE project_status ='Completed'");
$getleads	 	= $objCore->DBConn->GetOne("select count(*) from contact_us");


$objCore->smarty->assign("admin_arr",$admin_arr);
$objCore->smarty->assign(array("gettotalexperts" => $gettotalexperts,"getprojectpending"=>"$getprojectpending","getprojectcompleted"=>"$getprojectcompleted ","getleads" => $getleads));
include_once "footer.php";
?>