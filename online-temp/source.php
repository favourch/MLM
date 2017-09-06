<?php
include_once "../includes.inc.php";
$page = "online-temp/source";
$seo_url=$_GET[seo_url];

//$getnewlyjoinedplayerQry = $objcric->DBConn->Execute("SELECT id,user_type_id FROM users ORDER BY id DESC LIMIT 15");
//$newlyjoinedplayer 	= $objcric->newlyjoinedplayer($getnewlyjoinedplayerQry);



$objbrainak->smarty->assign(array(
"metaTitle" 	=> 	$siteContentsRes['meta_title'],
"metaKeywords"	=>	$siteContentsRes['meta_keyword'],
"metaDesc"		=>	$siteContentsRes['meta_description'],
"wTitle" 		=> 	$siteContentsRes['title'],
));

$objbrainak->smarty->display("header.tpl");
$objbrainak->smarty->display($page.".tpl");
include_once "footer.php";
?>