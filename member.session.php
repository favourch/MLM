<?php
$handlerSession = new SessionCBuserLogin();
$member_id = $handlerSession->checksess($_SESSION["cbench_member"]);
if(!$member_id){
header("location: ".HTTP_PATH);
exit;
}
?>