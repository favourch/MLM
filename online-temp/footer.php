<?php
$objbrainak->smarty->assign(array(
"HTTP_PATH" 	=> 	HTTP_PATH,
"pageName" 		=> 	$pageName
)); 
//if($pageName != "contactus.php" && $_GET[mod] != "9" )
//include_once "right.php";
$objbrainak->smarty->display("online-temp/footer.tpl");
$objbrainak->DBConn->Close(); 
?>