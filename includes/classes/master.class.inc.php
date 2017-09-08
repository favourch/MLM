<?php
include_once DIR_PLUGINS ."SmartyBC.class.php";
require_once(DIR_CLASSES .  DIRECTORY_SEPARATOR . 'dbconnect.php');
$childDepositAmount = 0;
$arr = 0;
class corefunction
{
	var $objbrainak, $smarty, $DBConn;

	    //The Project constructor.
	function corefunction() {

        $this->smarty                   = new Smarty();
        $this->smarty->template_dir     = DIR_VIEWS_TEMPLATES;
        $this->smarty->compile_dir      = DIR_VIEWS_TEMPLATES_C;
        $this->smarty->cache_dir        = DIR_VIEWS_CACHE;
       // $this->smarty->config_dir       = DIR_SMARTY_CONFIGS;
		$this->smarty->compile_check 	= true;
		$this->smarty->debugging 		= false;
		
		$this->DB                       =  new DataConnect($this);
        $this->DBConn                   = $this->DB->GetConnection();
		$this->HTTP_PATH                = HTTP_PATH;
		$this->min_logout_time			= 60;
		
		$this->objcric                  = $this;      
		//$this->common              		= new Common($this);
		
	}
	
	#============ Print array =========#
	function print_array($arr)
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}
	#============ Print array =========#
	function hashgen()
	{
		$hash = md5(uniqid(rand(),1));
		return $hash;
	}
	function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyz0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
	}
	#============== Magic Quotes Check ===============#
	function magic_quotes($val)
	{
		if (!get_magic_quotes_gpc()) {
		    $val = addslashes($val);
		} else {
		    $val = $val;
		}

		return $val;
		
	}
	#============== Magic Quotes Check ===============#
	function prefix_table($tablename)
	{
		$prefix=$this->prefix;
		$tablename=$prefix.$tablename;
		return $tablename;
	}
	#============== Prefix table name ================#
	



################ Image Resize function ###############
	
	function imageCompression($imgfile="",$thumbsize=0,$savePath=NULL) {
    if($savePath==NULL) {
        header('Content-type: image/jpeg');
        /* To display the image in browser
       
        */
    }
	
    list($width,$height)=getimagesize($imgfile);
    /* The width and the height of the image also the getimagesize retrieve other information as well   */
    //echo $width;
    //echo $height;
    $imgratio=$width/$height; 
    /*
    To compress the image we will calculate the ration 
    For eg. if the image width=700 and the height = 921 then the ration is 0.77...
    if means the image must be compression from its height and the width is based on its height
    so the newheight = thumbsize and the newwidth is thumbsize*0.77...
    */
   
    if($imgratio>1) {
        $newwidth=$thumbsize;
        $newheight=$thumbsize/$imgratio;
    } else {
        $newheight=$thumbsize;       
        $newwidth=$thumbsize*$imgratio;
    }
   
    $thumb=imagecreatetruecolor($newwidth,$newheight); // Making a new true color image

	$source=imagecreatefromjpeg($imgfile); // Now it will create a new image from the source

    imagecopyresampled($thumb,$source,0,0,0,0,$newwidth,$newheight,$width,$height);  // Copy and resize the image
    imagejpeg($thumb,$savePath,100);
    /*
    Out put of image 
    if the $savePath is null then it will display the image in the browser
    */
    imagedestroy($thumb);
    /*
        Destroy the image
    */
}	


//========================= CMS function starts
function getcms($recordSet){
			$aKey = 0 ;
		while (!$recordSet->EOF) {
			
						$news_rslt[$aKey] = array(
						label 				=> 	$recordSet->Fields('label'),
						title	    		=>	stripslashes($recordSet->Fields('title')),
						description	    	=>	stripslashes($recordSet->Fields('description')),
						seo_url	    		=>	stripslashes($recordSet->Fields('seo_url')),
						meta_title	    	=>	stripslashes($recordSet->Fields('meta_title')),
						meta_keyword		=>	stripslashes($recordSet->Fields('meta_keyword')),
						meta_description 	=>	stripslashes($recordSet->Fields('meta_description')),
						short_desc	    	=>	stripslashes($recordSet->Fields('short_desc')),
						image		    	=>	stripslashes($recordSet->Fields('image')),
						video_link      	=>   $recordSet->Fields('video_link'),
						);
						$recordSet->MoveNext();
						$aKey++;
		}
		return $news_rslt;
	}


function GetDownlineUser($recordSet){
		$aKey	= 0 ;
		while (!$recordSet->EOF) {
			
			$getchilddetails	=   $this->DBConn->GetRow("SELECT desired_username, FROM user_registration WHERE id='".$recordSet->Fields('child_id')."'");
			$getsponsotname	=   $this->DBConn->GetRow("SELECT desired_username FROM user_registration WHERE id='".$recordSet->Fields('parent_id')."'");
			
			$my_rslt[$aKey] = array(
				id						=> 	$recordSet->Fields('id'), 
				child_id				=> 	$recordSet->Fields('child_id'), 
				parent_id				=> 	$recordSet->Fields('parent_id'), 
				getchildname			=> $getchilddetails['desired_username'],
				getparentname			=> $getsponsotname['desired_username'],
				
				);
				$recordSet->MoveNext();
				$aKey++;
		}
		return $my_rslt;
	}


//=============================== getting news details
	function getNewsList($recordSet){
		$aKey = 0 ;
		while (!$recordSet->EOF) {
			$nDesc 	= 	strip_tags($recordSet->Fields('nDesc'));
			$nTitle	=	stripslashes($recordSet->Fields('nTitle'));
						$news_rslt[$aKey] = array(
						nTitle 		=> 	$nTitle, 
						nDate		=> 	$recordSet->Fields('nDate'), 
						nDesc		=> 	stripslashes($nDesc), 
						nShortDesc	=> 	$this->myTruncate(stripslashes(strip_tags($nDesc)), 125, $break=" ", $pad="..."), 
						seo_url		=> 	$recordSet->Fields('seo_url')
						);
					
						$recordSet->MoveNext();
						$aKey++;
		}
		return $news_rslt;
	}
	
	function getUserType(){
		$ROW= $this->DBConn->GetArray(QRY_UT);
		return $ROW;
	}
	function getOrderType(){
		$ROW= $this->DBConn->GetAssoc(QRY_OT);
		return $ROW;
	}
	function getDistrictDivision(){
		$ROW= $this->DBConn->GetArray(QRY_DD);
		return $ROW;
	}
	function getStateDivision(){
		$ROW= $this->DBConn->GetArray(QRY_SD);
		return $ROW;
	}
	function getBowlingCategories(){
		$ROW= $this->DBConn->GetAssoc(QRY_BC);
		return $ROW;
	}
	function getTeamCategories(){
		$ROW= $this->DBConn->GetAssoc(QRY_TC);
		return $ROW;
	}
	
	
	

function getPlayerinfo($recordSet){
	global $StatusArray, $member_id;
		$aKey = 0 ;
		while (!$recordSet->EOF) {
			
			
			$id					= 	$recordSet->Fields('id');
			$user_id			= 	$recordSet->Fields('user_id');
			$playerinfo  		= $this->DBConn->GetRow("SELECT * FROM users WHERE id='".$user_id."'");
			$getplayerstate		=   $this->DBConn->GetOne("SELECT name FROM location WHERE id = '".$recordSet->Fields('state')."'");

			
						$news_rslt[$aKey] = array(
						user_types_id			=>	$playerinfo[user_type_id],
						member_id				=>	$playerinfo[member_id],
						email_id				=>	$playerinfo[email_id],
						contact_no				=>	$playerinfo[contact_no],
						id						=> 	$id, 
						user_id					=> 	$user_id, 
						
						);
						$recordSet->MoveNext();
						$aKey++;
		}
		return $news_rslt;
	}


#================================ ADMIN FUNCTIONS STARTS =====================================#

/*public function regressive($one,$arr){

if($one=='one'){
$arr2 = array("parent_id"=>"1");
//print_r($arr2);	exit;	
$arr1 = array();
$arr1 = $arr2;
}
else if($one=='two'){
$arr1 = $arr;
}
// print_r($arr1);
	$arr2 =array();
	
	for($i=0;$i<count($arr1);$i++){
			$sql = "SELECT child_id FROM relations WHERE parent_id = '".$arr1['parent_id'][$i]."'";
			$childlist = $this->DBConn->GetArray($sql);
			  
			   for($j=0;$j<count($childlist);$j++){
				   $this->DBConn->Execute("INSERT INTO test SET child_id='".$childlist[$j]['child_id']."'");
				   $arr2 = array("parent_id"=>$childlist[$j]['child_id']);
				   
				  //	print_r($arr2);
				   }
		}
		if(empty($arr2)){
			echo "Else";
			exit;
		}
		if(!empty($arr2)){
			echo count($arr2);
			echo "Eldsnhflkdsglhkfg";
			$this->regressive('two',$arr2);
		//	print_r($arr2);
		
		}
		 
		 
	}
*/


//Method for regressive
public function regressive($one,$arr){ 
	//echo "Hello";die;
	//echo $_SESSION["user_id"];die;
    if($one=='one'){ 
       $this->DBConn->Execute(" DELETE FROM parent_child_linkage WHERE USER_ID ='".$_SESSION["user_id"]."' ");
    }  
 $arr2 =array(); 
 for($i=0;$i<count($arr);$i++){
   $sql = "SELECT child_id,placement,sponser_id FROM relations WHERE parent_id = '".$arr[$i]."'";
   $childlist = $this->DBConn->GetArray($sql);  
     
      for($j=0;$j<count($childlist);$j++){
       $this->DBConn->Execute("INSERT INTO parent_child_linkage SET parent_id = '".$arr[$i]."' , 
                                                    child_id='".$childlist[$j]['child_id']."',
				 leg='".$childlist[$j]['placement']."',
				 sponser_id='".$childlist[$j]['sponser_id']."',
                user_id ='".$_SESSION["user_id"]."' ");
	   $arr2[$j] = $childlist[$j]['child_id'];
	   
        if($one=='two'){
        //exit; 
          }
       
       } 
  }
  if(empty($arr2)){
  }
  if(!empty($arr2)){
     $this->regressive('two',$arr2);  
  }  
}
///Newly added
function regressiveForPlacement($one,&$arr,$placement){ 
	
   $sql = "SELECT child_id,placement FROM relations WHERE parent_id = '".$arr."' and placement ='".$placement."'";
   $childlist = $this->DBConn->GetArray($sql);  
     
	$child_list_id = $childlist[0]['child_id'];
  
  if($child_list_id == 0 || $child_list_id == NULL || $child_list_id == ""){
	  
	$_SESSION['placement_id_recursive'] = $arr;
	
	  
  }
   if($child_list_id != 0){
	 $this->regressiveForPlacement('two',$child_list_id,$placement);  
	 
  }  

}

///newly added ends

// Updating the status of the particular profile status and also in the relation table for the parent
public function updateStatus($payment_id){
	//$user_id_from_pay =$objCore->DBConn->GetOne("select userID from cryto_payments where paymentID =".$payment_id);
	//echo $payment_id;die;
	$sql = "UPDATE profile_info
	SET account_status = 1
	WHERE user_id = '".$_SESSION["user_id"]."'";
	$this->DBConn->Execute($sql);

	$sql1 ="UPDATE relations
	SET status = 1
	WHERE child_id = '".$_SESSION["user_id"]."'";
	$this->DBConn->Execute($sql);

	$sql2 = "UPDATE user_registration
	SET status = 1
	WHERE user_id = '".$_SESSION["user_id"]."'";
	$this->DBConn->Execute($sql);
	//echo $payment_id;die;
	$this->updateDepositAmount($payment_id);


}

//updating the deposit amount
public function updateDepositAmount($payment_id){
	//echo "HI";die;
	//echo "select * from cryto_payments where paymentID =".$payment_id;
	$sql = "select * from crypto_payments where paymentID =".$payment_id;
	//echo $sql;die;
	$payment_details = $this->DBConn->GetRow($sql);
	$payment_user_id = $payment_details['userID'];
	$payment_date = $payment_details['processedDate'];
	$amount = $payment_details['amount'];
	//echo $payment_user_id;die;

	$sql = "update profile_info set deposit_amount = deposit_amount + $amount,deposit_date = '$payment_date' where user_id = $payment_user_id and deposit_date < '$payment_date' and account_status = 1";
	//echo $sql;die;
	$this->DBConn->Execute($sql);
    $this->sponsorBonusCalculator($payment_user_id,$amount);

}


//Sponser Bonus Calculations
public function sponsorBonusCalculator($child_id,$amount){
	$sql1= 'select a.deposit_amount as user_deposit_amount ,b.sponser_id ,b.parent_id ,
	(select y.sponsor_bonus  from plan_info y where  
				y.plan_id = (select plan_id from profile_info x 
					  where x.user_id = b.sponser_id)) as parent_sponsor_bonus
	   from profile_info a,relations b
		 where a.user_id = b.child_id
			   and a.user_id = '.$child_id.' and a.account_status = 1 and b.status = 1';
			   //echo $sql1;die;
    $parentPresent = $this->DBConn->GetArray($sql1);
    $parentPercent = $parentPresent[0]['parent_sponsor_bonus'];
	$sponser_id = $parentPresent[0]['sponser_id'];
	$parentId = $parentPresent[0]['parent_id'];
	
	//global $childDepositAmount;
	//if($place == 1){
		$childDepositAmount = $amount;
		//echo $amount;
		
	//}
	//echo $parent_id;
     if($parentId){
		 //echo "I";
		$sponserBonusAmount = round($parentPercent*($childDepositAmount/100),8);
		//$sponserBonusAmount;die;
		//echo $parentPercent/100;die;
		
        $updateSponsorBonus = "UPDATE profile_info
		SET Total_Amount = Total_Amount + $sponserBonusAmount
		WHERE user_id = $sponser_id";
		//echo $updateSponsorBonus;die;
		$this->DBConn->Execute($updateSponsorBonus);
		
		$updateBonus_info = "insert into bonus_info set values('','$sponser_id','','SB','$sponserBonusAmount','')";

		$this->DBConn->Execute($updateBonus_info);
		
		//echo $updateBonus_info;die;
		//$this->sponsorBonusCalculator($parentId,2);
		
		$this->AddPlacementAmount($parentId,$amount);

	}
	
	header('Location:index.php');

}



//Calculation of placement deposit for the pairing bonus calculations

function AddPlacementAmount($child_id,$amount){
//echo "HI";die;
	//echo "HI".$child_id;die;
	
	$parent_id =0;
	$left_bonus = 0;
	$right_bonus = 0;
	
	$sql = "select  parent_id , placement
	 from relations 
	 where child_id = $child_id where status = 1";
	$values =  $this->DBConn->GetRow($sql);

	$placement = $values['placement'];
	$parent_id = $values['parent_id'];	   
	   
	   if($parent_id > 0){
		if($placement == 'LEFT'){
			$left_bonus = $amount;
		 }else if($placement == 'RIGHT'){
			$right_bonus = $amount;
		 }
		 $sql2 = "update profile_info set left_deposit_amount =left_deposit_amount + $left_bonus,
		 right_deposit_amount =right_deposit_amount + $right_bonus
where user_id = ".$parent_id;
//echo $sql2;die;
		 $updateAmount =$this->DBConn->Execute($sql2);
			$this->AddPlacementAmount($parent_id,$amount);
	   }
	   
	}



//Display binary tree

function binaryTree($parent_id){
	$sql = "SELECT A.parent_id,A.child_id,A.placement,B.left_deposit_amount,B.right_deposit_amount,C.desired_username,C.id FROM relations AS A,profile_info AS B,user_registration AS C

WHERE (A.parent_id = $parent_id OR A.child_id = $parent_id) AND (C.id = B.user_id)AND A.child_id = B.user_id ";


$details = $this->DBConn->GetArray($sql);
//print_r($details);

 $content = '';
$leftChildcontent = "<li id= 'null' class='col-sm-6'><div class = ''><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>No one<br>Left :0.0000<br>Right :0.0000</div><ul><li id= 'null' class='col-sm-6' ><div class = ''><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>No one<br>Left :0.0000<br>Right :0.0000</div></li><li id= 'null' class='col-sm-6' ><div class = ''><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>No one<br>Left :0.0000<br>Right :0.0000</div></li></ul></li>";

$rightChildcontent ="<li id= 'null' class='col-sm-6'><div class = ''><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>No one<br>Left :0.0000<br>Right :0.0000</div><ul><li id= 'null' class='col-sm-6' ><div class = ''><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>No one<br>Left :0.0000<br>Right :0.0000</div></li><li id= 'null' class='col-sm-6' ><div class = ''><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>No one<br>Left :0.0000<br>Right :0.0000</div></li></ul></li>";
for($i=0;$i<count($details);$i++)
{
	//echo $details[$i]['desired_username'];
	if($details[$i]['child_id'] == $parent_id )  
	{
		$content1= "<li id= ".$details[$i]['id']." class='col-sm-12'>Left :".$details[$i]['left_deposit_amount']."<div class = ".$details[$i]['id']."><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>".$details[$i]['desired_username']."</div>Right : ".$details[$i]['right_deposit_amount']."";
		
	}
	else if($details[$i]['placement'] == 'LEFT'){
		$leftChildcontent = "<li id= ".$details[$i]['id']." class='col-sm-6'><div class = ".$details[$i]['id']." onClick ='exTree(".$details[$i]['id'].")'><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>".$details[$i]['desired_username']."<br>Left :".$details[$i]['left_deposit_amount']."<br>Right : ".$details[$i]['right_deposit_amount']."</div>";
	   $leftChildcontent .= $this->binarytreeexpand($details[$i]['id']);
	   $leftChildcontent .="</li>";
	}
	else{
		$rightChildcontent = "<li id= ".$details[$i]['id']." class='col-sm-6'><div class = ".$details[$i]['id']." onClick ='exTree(".$details[$i]['id'].")'><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>".$details[$i]['desired_username']."<br>Left :".$details[$i]['left_deposit_amount']."<br>Right : ".$details[$i]['right_deposit_amount']."</div>";
		$rightChildcontent .=$this->binarytreeexpand($details[$i]['id']);
		$rightChildcontent .= "</li>";
	 }
}
//echo $Childcontent;die;
$content .= "<ul>".$content1."<br> <ul>".$leftChildcontent."". $rightChildcontent."</ul>" ;

$content .= "</li></ul>";

return $content; 
//return $details;

}

//binary expand tree
function binarytreeexpand($parent_id){
	$sql = "SELECT A.parent_id,A.child_id,A.placement,B.left_deposit_amount,B.right_deposit_amount,C.desired_username,C.id FROM relations AS A,profile_info AS B,user_registration AS C
	
	WHERE (A.parent_id = $parent_id) AND (C.id = B.user_id)AND A.child_id = B.user_id AND A.status = 1 AND B.account_status = 1";
	
	//echo $sql;die;
	$details = $this->DBConn->GetArray($sql);
	//echo $sql;
	//print_r($binaryDetails);
	//echo json_encode($binaryDetails);

	$content = '';
	$leftChildcontent = "<li id= 'null' class='col-sm-6'><div class = ''><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>No one<br>Left :0.0000<br>Right :0.0000</div></li>";
	$rightChildcontent ="<li id= 'null' class='col-sm-6'><div class = ''><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>No one<br>Left :0.0000<br>Right :0.0000</div></li>";
	for($i=0;$i<count($details);$i++)
	{
		//echo $details[$i]['desired_username'];
		if($details[$i]['placement'] == 'LEFT'){
		   $leftChildcontent = "<li id= ".$details[$i]['id']." class='col-sm-6'><div class = ".$details[$i]['id']." onclick='exTree(".$details[$i]['id'].")'><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>".$details[$i]['desired_username']."<br>Left :".$details[$i]['left_deposit_amount']."<br>Right : ".$details[$i]['right_deposit_amount']."</div></li>";
		}
		else if($details[$i]['placement'] == 'RIGHT'){
			$rightChildcontent = "<li id= ".$details[$i]['id']." class='col-sm-6'><div class = ".$details[$i]['id']." onclick='exTree(".$details[$i]['id'].")'><i class='fa fa-user fa-4px' style='font-size:60px;color:#3FA9BD;' aria-hidden='true'></i><br>".$details[$i]['desired_username']."<br>Left :".$details[$i]['left_deposit_amount']."<br>Right : ".$details[$i]['right_deposit_amount']."</div></li>";
		 }
	}
	//echo $Childcontent;die;
	//if($leftChildcontent == '' && $rightChildcontent == ''){
	$content .= "<ul>".$leftChildcontent." ". $rightChildcontent."</ul>" ;
	
	//$content .= "</li></ul>";
	return $content;
}

function cricbenchuserlist($recordSet){
	
		$aKey	= 0 ;
		while (!$recordSet->EOF) {
			if($recordSet->Fields('user_type_id')==5){
				$getplayerdetails	=   $this->DBConn->GetRow("SELECT team_name AS first_name,slugname,city,area,profile_photo FROM teams WHERE user_id='".$recordSet->Fields('id')."'");
			}
			else{
			$getplayerdetails	=   $this->DBConn->GetRow("SELECT first_name,city,area,division,slugname FROM players WHERE user_id='".$recordSet->Fields('id')."'");
			}
			
			//$getplayerstatus =   $this->DBConn->GetOne("SELECT status FROM new_joiners WHERE user_id='".$recordSet->Fields('id')."'");
			
			
			$my_rslt[$aKey] = array(
				user_id					=> 	$recordSet->Fields('id'),
				member_id				=> 	$recordSet->Fields('member_id'),
				email_id				=> 	$recordSet->Fields('email_id'),
				contact_no				=> 	$recordSet->Fields('contact_no'),
				user_type_id			=> 	$recordSet->Fields('user_type_id'),
				created_at				=> 	$recordSet->Fields('created_at'),
				name					=>	$getplayerdetails[first_name], 
				city					=>	$getplayerdetails[city], 
				area					=>	$getplayerdetails[area], 
				division					=>	$getplayerdetails[division], 
			
				);
				$recordSet->MoveNext();
				$aKey++;
		}
		return $my_rslt;
	}


function admintopperformance($recordSet){
	
		$aKey	= 0 ;
		while (!$recordSet->EOF) {
			
			$getplayername =   $this->DBConn->GetOne("SELECT first_name FROM players WHERE user_id='".$recordSet->Fields('user_id')."'");
			if($getplayername == '') {
				$getplayername 	=   $this->DBConn->GetOne("SELECT team_name FROM teams WHERE user_id='".$recordSet->Fields('user_id')."'");
				$gettopteam 	=   $this->DBConn->GetRow("SELECT oppnent_team_name,match_date,ground_name,run_scored,wickets,match_result FROM team_score_diary WHERE id='".$recordSet->Fields('score_diary_id')."'");
			}
			else {
				$gettopscore =   $this->DBConn->GetRow("SELECT * FROM player_score_diary WHERE id='".$recordSet->Fields('score_diary_id')."'");
			}
			
			
			$my_rslt[$aKey] = array(
				id				=> 	$recordSet->Fields('id'),
				user_id				=> 	$recordSet->Fields('user_id'),
				score_diary_id		=> 	$recordSet->Fields('score_diary_id'),
				my_team_name		=> 	$gettopscore[my_team_name],
				ground_name			=> 	$gettopscore['ground_name'],
				batting_order		=> 	$gettopscore['batting_order'],
				run_scored			=> 	$gettopscore['run_scored'],
				balls_played		=> 	$gettopscore['balls_played'],
				strike_rate			=> 	$gettopscore['strike_rate'],
				bowled_overs		=> 	$gettopscore['bowled_overs'],
				runs_given			=> 	$gettopscore['runs_given'],
				wickets				=> 	$gettopscore['wickets'],
				maiden				=> 	$gettopscore['maiden'],
				economy_rate		=> 	$gettopscore['economy_rate'],
				getplayername		=>	$getplayername,
				oppnent_team_name	=>	$gettopteam[oppnent_team_name],
				team_match_date		=>	$gettopteam[match_date],
				team_ground_name	=>	$gettopteam[ground_name],
				team_run_scored		=>	$gettopteam[run_scored],
				team_wickets		=>	$gettopteam[wickets],
				team_match_result	=>	$gettopteam[match_result],
				ground_name			=>	$gettopteam[ground_name],
				my_team_name		=>$getplayername
				
				);
				$recordSet->MoveNext();
				$aKey++;
		}
		return $my_rslt;
	}
	
	function topplayerscoreperformance($recordSet){
	
		$aKey	= 0 ;
		while (!$recordSet->EOF) {
			
			$gettopperformerid =   $this->DBConn->GetOne("SELECT id FROM performance WHERE score_diary_id	='".$recordSet->Fields('id')."'");
			
			$my_rslt[$aKey] = array(
				id					=> 	$recordSet->Fields('id'),
				user_id				=> 	$recordSet->Fields('user_id'),
				match_date			=> 	$recordSet->Fields('match_date'),
				my_team_name		=> 	$recordSet->Fields('my_team_name'),
				opp_team_name		=> 	$recordSet->Fields('opp_team_name'),
				ground_name			=> 	$recordSet->Fields('ground_name'),
				batting_order		=> 	$recordSet->Fields('batting_order'),
				run_scored			=> 	$recordSet->Fields('run_scored'),
				balls_played		=> 	$recordSet->Fields('balls_played'),
				four				=> 	$recordSet->Fields('four'),
				six					=> 	$recordSet->Fields('six'),
				bowled_overs		=> 	$recordSet->Fields('bowled_overs'),
				maiden				=> 	$recordSet->Fields('maiden'),
				runs_given			=> 	$recordSet->Fields('runs_given'),
				wickets				=> 	$recordSet->Fields('wickets'),
				strike_rate			=> 	$recordSet->Fields('strike_rate'),
				economy_rate		=> 	$recordSet->Fields('economy_rate'),
				first_name			=> 	$recordSet->Fields('first_name'),
				gettopperformerid	=> $gettopperformerid,
				);
				$recordSet->MoveNext();
				$aKey++;
		}
		return $my_rslt;
	}


function topteamscoreperformance($recordSet){
	
		$aKey	= 0 ;
		while (!$recordSet->EOF) {
			
			$gettopperformerid =   $this->DBConn->GetOne("SELECT id FROM performance WHERE score_diary_id = '".$recordSet->Fields('id')."'");
			
			$my_rslt[$aKey] = array(
				id						=> 	$recordSet->Fields('id'),
				user_id					=> 	$recordSet->Fields('user_id'),
				oppnent_team_name		=> 	$recordSet->Fields('oppnent_team_name'),
				ground_name				=> 	$recordSet->Fields('ground_name'),
				run_scored				=> 	$recordSet->Fields('run_scored'),
				wickets					=> 	$recordSet->Fields('wickets'),
				match_result			=> 	$recordSet->Fields('match_result'),
				team_name				=> 	$recordSet->Fields('team_name'),
				gettopperformerid		=> $gettopperformerid,
				);
				$recordSet->MoveNext();
				$aKey++;
		}
		return $my_rslt;
	}


	#=========== Return zero if the value is null ==========#
	function null_zero($v)
	{
		if($v == "")
			return 0;
		else
			return $v;
	}
	#=========== Return zero if the value is null ==========#

		
	#=========== Return zero if the value is null ==========#
	static public function slugify($text)
	{
	  // replace non letter or digits by -
	  $text = preg_replace('~[^\pL\d]+~u', '-', $text);	
	  // transliterate
	  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	  // remove unwanted characters
	  $text = preg_replace('~[^-\w]+~', '', $text);	
	  // trim
	  $text = trim($text, '-');
	  // remove duplicate -
	  $text = preg_replace('~-+~', '-', $text);
	  // lowercase
	  $text = strtolower($text);
	  if (empty($text)) {
		return 'n-a';
	  }
	  return $text;
	}

	function seoUrl($url)
	{
		$url = preg_replace("/\W+/","-",$url);
		$url = $this->slugify($url);
		 $a = array('À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü','Ý','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','ÿ','A','a','A','a','A','a','C','c','C','c','C','c','C','c','D','d','Ð','d','E','e','E','e','E','e','E','e','E','e','G','g','G','g','G','g','G','g','H','h','H','h','I','i','I','i','I','i','I','i','I','i','?','?','J','j','K','k','L','l','L','l','L','l','?','?','L','l','N','n','N','n','N','n','?','O','o','O','o','O','o','Œ','œ','R','r','R','r','R','r','S','s','S','s','S','s','Š','š','T','t','T','t','T','t','U','u','U','u','U','u','U','u','U','u','U','u','W','w','Y','y','Ÿ','Z','z','Z','z','Ž','ž','?','ƒ','O','o','U','u','A','a','I','i','O','o','U','u','U','u','U','u','U','u','U','u','?','?','?','?','?','?');
    $b = array('A','A','A','A','A','A','AE','C','E','E','E','E','I','I','I','I','D','N','O','O','O','O','O','O','U','U','U','U','Y','s','a','a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','u','y','y','A','a','A','a','A','a','C','c','C','c','C','c','C','c','D','d','D','d','E','e','E','e','E','e','E','e','E','e','G','g','G','g','G','g','G','g','H','h','H','h','I','i','I','i','I','i','I','i','I','i','IJ','ij','J','j','K','k','L','l','L','l','L','l','L','l','l','l','N','n','N','n','N','n','n','O','o','O','o','O','o','OE','oe','R','r','R','r','R','r','S','s','S','s','S','s','S','s','T','t','T','t','T','t','U','u','U','u','U','u','U','u','U','u','U','u','W','w','Y','y','Y','Z','z','Z','z','Z','z','s','f','O','o','U','u','A','a','I','i','O','o','U','u','U','u','U','u','U','u','U','u','A','a','AE','ae','O','o');
    return strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/','/[ -]+/','/^-|-$/'),array('','-',''),str_replace($a,$b,$url)));
	}
	#=========== Return zero if the value is null ==========#

	 function myTruncate($string, $limit, $break=" ", $pad="...")  {
    // return with no change if string is shorter than $limit
    if(strlen($string) <= $limit) return $string;
 
    // is $break present between $limit and the end of the string?
    if(false !== ($breakpoint = strpos($string, $break, $limit))) {
      if($breakpoint < strlen($string) - 1) {
        $string = substr($string, 0, $breakpoint) . $pad;
      }
    }
    
    return $string;
  }
}

	
class SessionCBuserLogin extends corefunction{
	public function CBverifylogin($cbuser,$cbpass){
		$users_table="users";

		$rslt=$this->DBConn->GetRow("select * from $users_table where (email_id='$cbuser' OR contact_no = '$cbuser') AND password='$cbpass'");
		if($rslt[0] != "")// valid entry
		{		
			$userid =$rslt["id"];		
			session_start();
			$hash=$this->hashgen();
			$_SESSION["cbench_member"] = $hash;
			$_SESSION["cbench_memberid"] = $userid;	

			$time=time();
			
			$sessiontblarr 	= $this->DBConn->GetRow("select count(*) as cnt from users_session where member_id='$userid'");
			$cnt		= $sessiontblarr[cnt];

			if ($cnt != 0){
				$this->DBConn->Execute("DELETE FROM users_session where member_id = '$userid'");
			}
				$this->DBConn->Execute("insert into users_session values ('$userid','$hash','$time')");
				return $userid;	
		}
		else{				
			echo json_encode("Invalid Email or Password");
			exit();
			}
		}
		
		public function checksess($hash){
			$getMemSession = $this->DBConn->GetRow("SELECT * FROM users_session WHERE hash= '$hash'");
			$user_id = $getMemSession[member_id];
			if($user_id > 0)
				return $user_id;
			else
				return "";
			
		}
}



?>