<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="make_payment";


$planqry = "SELECT plan_id,plan_name,min,max FROM plan_info WHERE plan_id='".$_GET['plan_id']."'";
$plan_rslt = $objCore->DBConn->GetRow($planqry);

$MinPay = $plan_rslt[min];
$MaxPay = $plan_rslt[max];
//print_r($plan_rslt);


if(isset($_POST[PayWithBitcoin])=='Pay With Bitcoin'){

	$update_qry = "UPDATE profile_info SET plan_id = '".$_POST['plan_id']."',deposit_amount='".$_POST['amount']."',deposit_date='".time()."' where id='".$_SESSION["user_id"]."'";
	$objCore->DBConn->Execute($update_qry);
	?>
    <script>alert('Success');</script>
    <?php
	}

$objCore->smarty->assign(array('plan_rslt'=>$plan_rslt, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg,'MinPay'=>$MinPay,'MaxPay'=>$MaxPay));
include "footer.php";
?>