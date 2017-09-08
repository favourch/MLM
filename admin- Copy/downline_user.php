<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="downline_user";



/*$qry = "SELECT * FROM experts ORDER BY employee_id   ";
$experts_rslt = $objCore->DBConn->GetArray($qry);
//print_r($experts_rslt);
*/

/*$downlineQry = $objCore->DBConn->Execute("SELECT * FROM relations WHERE parent_id='1'");
$getdownlineuser 	= $objCore->GetDownlineUser($downlineQry);*/

//print_r($getdownlineuser);
//$arr = array();

$username = $objCore->DBConn->GetOne("SELECT desired_username FROM user_registration WHERE id='".$user_id."'");


//PARAMETER - PARENT ID BASED ON PARENT ID USING REGRESSIVE METHOD TO LOAD THE CHILD DETAILS
$arr = array();
$arr = array($user_id);
$objCore->regressive('one',$arr);



$GetDownline = $objCore->DBConn->GetArray("SELECT B.DESIRED_USERNAME, 
       (SELECT X.DESIRED_USERNAME FROM USER_REGISTRATION X WHERE X.ID =A.PARENT_ID) PLACEMENT,
       (SELECT X.DESIRED_USERNAME FROM USER_REGISTRATION X WHERE X.ID =A.SPONSER_ID) SPONSER,
       
       (SELECT X.deposit_amount FROM PROFILE_INFO X WHERE X.ID =A.CHILD_ID) deposit_amount,
        A.LEG,
       (SELECT X.ADDED_DATE FROM PROFILE_INFO X WHERE X.ID =A.CHILD_ID) ADDED_DATE
FROM PARENT_CHILD_LINKAGE A, USER_REGISTRATION B
WHERE A.CHILD_ID = B.ID");




$objCore->smarty->assign(array('GetDownline'=>$GetDownline, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg,'username'=>$username));
include "footer.php";
?>