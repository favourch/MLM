<?php
include_once "includes.inc.php";
$page = "index";
?>

<script>
window.location = "<?php echo HTTP_PATH.'user/login.php'?>";
</script>
<?php

exit;

$objbrainak->smarty->display("index.tpl");
include_once "footer.php";
?>