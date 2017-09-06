<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="user_registration";

if($_GET['action']=="delete"){
	
	$delete_qry = "delete from projects WHERE id='".$_GET['id']."'";
	$objCore->DBConn->Execute($delete_qry);
	$showMsg = "Record Deleted Successfully.";
}

$qry = "SELECT * FROM user_registration ORDER BY id DESC ";
$user_rslt = $objCore->DBConn->GetArray($qry);
//print_r($user_rslt);

if(count($news_rslt) == 0){
	$empty_msg = "<tr><td colspan='3' style='text-align:center;'>No Record Found...!</td></tr>";
}else{
	$empty_msg = "";
}
if($_REQUEST[save] == 1)
$showMsg = "Detail Updated Successfully...";

$objCore->smarty->assign(array('user_rslt'=>$user_rslt, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>