<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="bstyle";

if($_GET['action']=="delete"){
	$delete_qry = "delete from body_style WHERE id='".$_GET['id']."'";
	$objCore->DBConn->Execute($delete_qry);
	$showMsg = "Deleted successfully.";
}


$qry = "SELECT * FROM body_style ORDER BY name ASC";
$row_rslt = $objCore->DBConn->GetArray($qry);
if($_REQUEST[save] == 1)
$showMsg = "Page saved Successfully...";

$objCore->smarty->assign(array('row_rslt' => $row_rslt, 'showMsg' => $showMsg,'empty_msg' => $empty_msg));
include "footer.php";
?>