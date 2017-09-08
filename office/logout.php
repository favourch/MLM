<?php
ob_start();
include_once "includes.inc.php";
include_once "session.inc.php";



$delete_qry = "DELETE FROM admin_session WHERE admin_id='1'";
$objCore->DBConn->Execute($delete_qry);

session_unset();
session_destroy();

header("Location:login.php?err=lgt");
exit;

?>