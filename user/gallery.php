<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="gallery";

$id = $_REQUEST['id'];

$aid = $_REQUEST['aid'];

if($_GET['action']=='setdefault')
{	
	$update_main_img = $objCore->DBConn->Execute("update car_ads_images set mainimg='0' where ads_id='".$_REQUEST['aid']."' AND mainimg='1'");
 	$update_main_img = $objCore->DBConn->Execute("update car_ads_images set mainimg='1' where id='".$_REQUEST['id']."'");	
}

if($_GET['action']=="delete"){
	$getImg = $objCore->DBConn->GetRow("select image from car_ads_images where id='".$_GET['id']."'");
	$exisitngImage = $getImg['image'];
	@unlink(car_upload_path.$exisitngImage);
	$delete_qry = "delete from car_ads_images WHERE id='".$_GET['id']."'";
	$objCore->DBConn->Execute($delete_qry);
	$showMsg = "Image deleted successfully.";
	header("location:gallery.php?aid=".$_REQUEST['aid']);
}
if($_GET['act']=="deleteImg"){
	$getImg = $objCore->DBConn->GetRow("select image from car_ads_images where id='".$_GET['id']."'");
	$exisitngImage = $getImg['image'];
	@unlink(car_upload_path.$exisitngImage);
	$delete_qry = "update car_ads_images set image='' WHERE id='".$_GET['id']."'";
	$objCore->DBConn->Execute($delete_qry);
	header("location:gallery.php?id=".$_GET['id']."&aid=".$_REQUEST['aid']);
	exit;
}
if($_POST['submit_text'] == "Submit")
{

	$aid = $_POST[aid];
	$exist = $objCore->DBConn->GetRow("select id from car_ads_images where id='".$_REQUEST['id']."'");
	
	/*image upload start*/
	$eimage  = $_FILES['gimage']['tmp_name'];
    $eimage1 = $_FILES['gimage']['name'];
    $hashhh = substr($objCore->hashgen(),0,5);
    if ($eimage != 'none' && $eimage != ''){ 
		$dest = car_upload_path;
        $filename = explode(".",basename($_FILES["gimage"]['name']));
		$image_type = $filename[count($filename)-1];
		$destfile = $hashhh . "_Meehan_motors_.".$image_type;
        $dest_path = $dest.$destfile;
		$imgsize = $_FILES['gimage']['size'];
        move_uploaded_file($eimage, $dest_path);	
		$set1 =",image='$destfile'";
	}

	/*image upload end*/
	if($exist[id] == $_REQUEST[id] && $_REQUEST[id] != ""){
		 $update_content_qry = "update car_ads_images set ads_id='".$aid."', $set1 where id='".$_REQUEST['id']."'";
	}else{
		$update_content_qry = "insert into car_ads_images set ads_id='".$aid."' $set1";
	}	
	$_SESSION[a_msg] = EDIT_MSG;		
	$objCore->DBConn->Execute($update_content_qry);
	
	$objCore->DBConn->Execute("UPDATE car_ads SET spotlight='1' WHERE id='$aid'");
	
	header("Location:gallery.php?save=1&aid=$aid");
	exit;
}
$aid = $_REQUEST[aid];
//$qry = "SELECT * FROM car_ads_images WHERE ads_id='$aid' ORDER BY id DESC";
//$gallery_rslt = $objCore->DBConn->GetArray($qry);

if($_GET['act'] == "edit" && $id != ''){
	$img_rslt = $objCore->DBConn->GetRow("select * from car_ads_images where id='$id'");
	$rslt = $objCore->DBConn->GetArray("select * from car_ads_images WHERE ads_id='$aid' ORDER BY rank ");
}else{
	$rslt = $objCore->DBConn->GetArray("select * from car_ads_images WHERE ads_id='$aid' ORDER BY rank");
}

//print_r($rslt);

if($id !=""){
	$imag = car_display_path.$img_rslt['image'];
	$image	="<img src='$imag' border=0 width='250px' height='200px'>";
}else{
	$image = '<input type=file name=image1 size=30 class="form-control" value="{{image}}">';
	$rank = '';
}

$vidImage	=  $img_rslt['image'];
if($vidImage == "" ){
	$ImageFile = '<input type="file" name="gimage" id="gimage" class="form-control" multiple/>';
}else{
	$imgpath1 = car_display_path.$vidImage;
	$delpath = "gallery.php?id=".$_GET[id]."&act=deleteImg";
		$ImageFile = "<img src=\"$imgpath1\" alt='gal-img' height=130 width=150 border='0' /> ";
 }


if($_POST[rank_btn]=='Update Rank')
{
	for($i=0;$i<count($rslt);$i++)
	{
		$id 		= $rslt[$i][id];
		$rankid  	= "rank_".$id;
		$objCore->DBConn->Execute("UPDATE car_ads_images SET rank='".$_POST[$rankid]."' WHERE id='$id'");
		header("Location:gallery.php?aid=$aid");
	
	}
}

if($_REQUEST[save] == 1)
$showMsg = "Page saved Successfully...";

$objCore->smarty->assign(array('rslt'=>$rslt, 'showMsg'=>$showMsg, "ImageFile"=>$ImageFile, "id"=>$_REQUEST['id'], "car_display_path"=>car_display_path, "img_rslt"=>$img_rslt, "showMsg"=>$showMsg, "aid" => $aid));
include "footer.php";
?>