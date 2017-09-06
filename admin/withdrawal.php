<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="withdrawal";

if($_GET['action']=="delete"){
	$getImg = $objCore->DBConn->GetRow("select image from news where id='".$_GET['id']."'");
	$exisitngImage = $getImg['image'];
	@unlink(news_upload_path.$exisitngImage);
	$delete_qry = "delete from experts WHERE id='".$_GET['id']."'";
	$objCore->DBConn->Execute($delete_qry);
	$showMsg = "Record Deleted Successfully.";
}

$qry = "SELECT * FROM experts ORDER BY employee_id   ";
$experts_rslt = $objCore->DBConn->GetArray($qry);
//print_r($experts_rslt);

if(count($news_rslt) == 0){
	$empty_msg = "<tr><td colspan='3' style='text-align:center;'>No Record Found...!</td></tr>";
}else{
	$empty_msg = "";
}
if($_REQUEST[save] == 1)
$showMsg = "Detail Updated Successfully...";

$objCore->smarty->assign(array('experts_rslt'=>$experts_rslt, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>