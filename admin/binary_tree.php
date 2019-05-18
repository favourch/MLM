<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="binary_tree";

$details = $objCore->binaryTree($_SESSION['user_id']);
//print_r($details);
//print_r($details[0]['desired_username']);die;

$content = '';
$leftChildcontent = '';
$rightChildcontent ='';
for($i=0;$i<count($details);$i++)
{
	//echo $details[$i]['desired_username'];
	if($details[$i]['child_id'] == $_SESSION['user_id'] )  
	{
		$content1= "<li id= ".$details[$i]['id'].">Left :".$details[$i]['left_deposit_amount']."<div name = ".$details[$i]['id']."><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>".$details[$i]['desired_username']."</div>Right : ".$details[$i]['right_deposit_amount']."";
		
	}
	else if($details[$i]['placement'] == 'LEFT'){
	   $leftChildcontent = "<li id= ".$details[$i]['id']." >Left :".$details[$i]['left_deposit_amount']."<div name = ".$details[$i]['id']." onclick ='expandTree(".$details[$i]['id'].")'><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>".$details[$i]['desired_username']."</div>Right :".$details[$i]['right_deposit_amount']."</li>";
	}
	else{
		$rightChildcontent = "<li id= ".$details[$i]['id']." >Left :".$details[$i]['left_deposit_amount']."<div name = ".$details[$i]['id']." onclick ='expandTree(".$details[$i]['id'].")'><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>".$details[$i]['desired_username']."</div>Right : ".$details[$i]['right_deposit_amount']."</li>";
	 }
}
//echo $Childcontent;die;
$content .= "<ul>".$content1."<br> <ul>".$leftChildcontent."". $rightChildcontent."</ul>" ;

$content .= "</li></ul>";

//echo $content;die;

//echo $content;die;

$objCore->smarty->assign(array('content'=>$content, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>