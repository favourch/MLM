<?php
include_once "includes.inc.php";
include_once "session.inc.php";


if($_SESSION["admin_id"]=='')
header('Location:login.php');

//echo $_SESSION["admin_id"];


$page = "index";


//SELECT COUNT(*) FROM user_registration WHERE  FROM_UNIXTIME(added_date,'%Y-%m-%d') =  FROM_UNIXTIME(NOW(),'%Y-%m-%d');

$today_date		= $objCore->DBConn->GetOne("SELECT COUNT(*) FROM user_registration WHERE  FROM_UNIXTIME(added_date,'%Y-%m-%d') =  DATE_FORMAT(NOW(), '%Y-%m-%d')");

$gettotaluser		= $objCore->DBConn->GetOne("SELECT COUNT(*) FROM user_registration where status = 1 and verified_status = 1");




	
$admin_arr 		= $objCore->DBConn->GetRow("select * from admin where id='1'");


$gettotalearnings = $objCore->DBConn->GetRow("SELECT Total_Amount,deposit_amount,total_profit FROM profile_info WHERE user_id='".$user_id."'");

$getwithdraw = $objCore->DBConn->GetOne("SELECT SUM(amount) FROM withdrawal WHERE user_id='".$user_id."'");
$getprofit = $objCore->DBConn->GetOne("SELECT SUM(bonus_amount) FROM bonus_info WHERE user_id='".$user_id."'");
$getsponser = $objCore->DBConn->GetOne("SELECT SUM(bonus_amount) FROM bonus_info WHERE user_id='".$user_id."' AND bonus_name='SB'");
$getparing = $objCore->DBConn->GetOne("SELECT SUM(bonus_amount) FROM bonus_info WHERE user_id='".$user_id."' AND bonus_name='PB'");

$getplan = $objCore->DBConn->GetOne("SELECT p.plan_name FROM profile_info as pro,plan_info as p WHERE user_id='".$user_id."' AND pro.plan_id=p.plan_id");


$objCore->smarty->assign("admin_arr",$admin_arr);
$objCore->smarty->assign(array("gettotalearnings" => $gettotalearnings,"getwithdraw"=>$getwithdraw,"getprofit"=>$getprofit,"getsponser" => $getsponser,"getparing" => $getparing,"getplan"=>$getplan,"gettotaluser"=>$gettotaluser,"today_date"=>$today_date));
include_once "footer.php";

?>