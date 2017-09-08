<?php
include_once "includes.inc.php";



if($_GET[existing_check] == "username"){

	$getexisting_check  = $objCore->DBConn->GetOne("SELECT desired_username FROM user_registration WHERE desired_username='".$_GET[desired_username]."'");

if($getexisting_check=='')
	echo json_encode(1);
	else
	echo json_encode(0);
	exit;
	
}


if($_GET[existing_check] == "checkemail"){
	//echo "Email";die;

	$getexisting_check  = $objCore->DBConn->GetOne("SELECT email_address FROM user_registration WHERE email_address='".$_GET[email_address]."'");

if($getexisting_check=='')
	echo json_encode(1);
	else
	echo json_encode(0);
	exit;
	
}

if($_GET[existing_check] == "binaryExpand"){

	//echo "Email";die;
	//echo $_GET[parent_id];
	$sql = "SELECT A.parent_id,A.child_id,A.placement,B.left_deposit_amount,B.right_deposit_amount,C.desired_username,C.id FROM relations AS A,profile_info AS B,user_registration AS C
	
	WHERE (A.parent_id = $_GET[parent_id]) AND (C.id = B.user_id)AND A.child_id = B.user_id AND A.status = 1 AND B.account_status = 1";
	
	//echo $sql;die;
	$details = $objCore->DBConn->GetArray($sql);
	//echo $sql;
	//print_r($binaryDetails);
	//echo json_encode($binaryDetails);

	$content = '';
	$leftChildcontent = '';
	$rightChildcontent ='';
	for($i=0;$i<count($details);$i++)
	{
		//echo $details[$i]['desired_username'];
		if($details[$i]['placement'] == 'LEFT'){
		   $leftChildcontent = "<li id= ".$details[$i]['id']." >Left :".$details[$i]['left_deposit_amount']."<div name = ".$details[$i]['id']." onclick ='expandTree(".$details[$i]['id'].")'><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>".$details[$i]['desired_username']."</div>Right : ".$details[$i]['right_deposit_amount']."</li>";
		}
		else if($details[$i]['placement'] == 'RIGHT'){
			$rightChildcontent = "<li id= ".$details[$i]['id']." >Left :".$details[$i]['left_deposit_amount']."<div name = ".$details[$i]['id']." onclick ='expandTree(".$details[$i]['id'].")'><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>".$details[$i]['desired_username']."</div>Right : ".$details[$i]['right_deposit_amount']."</li>";
		 }
	}
	//echo $Childcontent;die;
	//if($leftChildcontent == '' && $rightChildcontent == ''){
	$content .= "<ul>".$leftChildcontent." ". $rightChildcontent."</ul>" ;
	
	$content .= "</li></ul>";
	echo $content;
	//}
	

	
}


	
?>