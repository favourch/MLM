<?php
include_once "includes.inc.php";
$page = "page-404";
$seo_url=$_GET[seo_url];




//$GetTrophydetailsQry = $objcric->DBConn->Execute("SELECT * FROM trophy GROUP BY id DESC ");
//$GetTrophydetails 	= $objcric->getTropiesdetails($GetTrophydetailsQry);



$objbrainak->smarty->assign(array(
"metaTitle" 	=> 	$siteContentsRes['meta_title'],
"metaKeywords"	=>	$siteContentsRes['meta_keyword'],
"metaDesc"		=>	$siteContentsRes['meta_description'],
"wTitle" 		=> 	$siteContentsRes['title'],

));
$objbrainak->smarty->display("header.tpl");
$objbrainak->smarty->display("$page.tpl");
include_once "footer.php";
?>