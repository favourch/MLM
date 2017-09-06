<?php

include_once "includes.inc.php";
include_once "session.inc.php";
$page = "Hello";

//$objCore->pairingBonus('11');
$objCore->sponsorBonusCalculator('42',1);
//$objCore->paringBonus('1');

include_once "footer.php";
?>