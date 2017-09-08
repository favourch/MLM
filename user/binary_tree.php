<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="binary_tree";

$content = $objCore->binaryTree($_SESSION['user_id']);
//print_r($details);
//print_r($details[0]['desired_username']);die;

/* $content = '';
$leftChildcontent = "<li id= 'null' class='col-sm-6' ><div class = ''><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>No one<br>Left :0.0000<br>Right :0.0000</div></li>";
$rightChildcontent ="<li id= 'null' class='col-sm-6'><div class = ''><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>No one<br>Left :0.0000<br>Right :0.0000</div></li>";
for($i=0;$i<count($details);$i++)
{
	//echo $details[$i]['desired_username'];
	if($details[$i]['child_id'] == $_SESSION['user_id'] )  
	{
		$content1= "<li id= ".$details[$i]['id']." class='col-sm-12'>Left :".$details[$i]['left_deposit_amount']."<div class = ".$details[$i]['id']."><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>".$details[$i]['desired_username']."</div>Right : ".$details[$i]['right_deposit_amount']."";
		
	}
	else if($details[$i]['placement'] == 'LEFT'){
		$leftChildcontent = "<li id= ".$details[$i]['id']." class='col-sm-6'><div class = ".$details[$i]['id']." onClick ='exTree(".$details[$i]['id'].")'><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>".$details[$i]['desired_username']."<br>Left :".$details[$i]['left_deposit_amount']."<br>Right : ".$details[$i]['right_deposit_amount']."</div>";
	   $leftChildcontent .= $objCore->binarytreeexpand($details[$i]['id']);
	   $leftChildcontent .="</li>";
	}
	else{
		$rightChildcontent = "<li id= ".$details[$i]['id']." class='col-sm-6'><div class = ".$details[$i]['id']." onClick ='exTree(".$details[$i]['id'].")'><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>".$details[$i]['desired_username']."<br>Left :".$details[$i]['left_deposit_amount']."<br>Right : ".$details[$i]['right_deposit_amount']."</div>";
		$rightChildcontent .=$objCore->binarytreeexpand($details[$i]['id']);

		$rightChildcontent .= "</li>";
	 }
}
//echo $Childcontent;die;
$content .= "<ul>".$content1."<br> <ul>".$leftChildcontent."". $rightChildcontent."</ul>" ;

$content .= "</li></ul>";  */

//echo $content;die;

//echo $content;die;

$objCore->smarty->assign(array('content'=>$content, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
?>

<?php
include "footer.php";

?>
