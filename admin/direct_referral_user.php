<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="direct_referral_user";

if($_GET['action']=="delete"){
	$getImg = $objCore->DBConn->GetRow("select image from news where id='".$_GET['id']."'");
	$exisitngImage = $getImg['image'];
	@unlink(news_upload_path.$exisitngImage);
	$delete_qry = "delete from experts WHERE id='".$_GET['id']."'";
	$objCore->DBConn->Execute($delete_qry);
	$showMsg = "Record Deleted Successfully.";
}

$qry = "SELECT b.desired_username,b.your_fullname, (select desired_username from user_registration x where x.id = a.parent_id) spancer, (select plan_name from plan_info x where plan_id = c.plan_id) as plan_name, c.deposit_amount,c.added_date FROM relations a, user_registration b, profile_info c WHERE parent_id = '".$user_id."' and b.id = a.child_id and b.id = c.user_id ";
$direct_referral_rslt = $objCore->DBConn->GetArray($qry);

//print_r($direct_referral_rslt);


if(count($news_rslt) == 0){
	$empty_msg = "<tr><td colspan='3' style='text-align:center;'>No Record Found...!</td></tr>";
}else{
	$empty_msg = "";
}
if($_REQUEST[save] == 1)
$showMsg = "Detail Updated Successfully...";

$objCore->smarty->assign(array('direct_referral_rslt'=>$direct_referral_rslt, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg,'spancer'=>$direct_referral_rslt[0][spancer]));
include "footer.php";
?>