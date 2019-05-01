<?php

include("ansicash.php");
$ecocash = new ecocash;
$result = $ecocash->initialize_transaction("10","0786391149");
echo $result;
?>
