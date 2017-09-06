<?php
ob_start();
include_once "includes.inc.php";
include_once "session.inc.php";

$delete_qry = "DELETE FROM user_session WHERE user_id='".$_SESSION["user_id"]."'";
$objCore->DBConn->Execute($delete_qry);

session_unset();
session_destroy();

header("Location:login.php?err=lgt");
exit;

?>