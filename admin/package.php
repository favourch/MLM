<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="package";

$planqry = "SELECT * FROM plan_info ";
$planqry_rslt = $objCore->DBConn->GetArray($planqry);
//print_r($planqry_rslt);



if($_REQUEST[save] == 1)
$showMsg = "Detail Updated Successfully...";

$objCore->smarty->assign(array('silver_rslt'=>$silver_rslt,'gold_rslt'=>$gold_rslt,'platinum_rslt'=>$platinum_rslt, 'showMsg'=>$showMsg,'planqry_rslt'=>$planqry_rslt));
include "footer.php";
?>