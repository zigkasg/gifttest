<?php
header('Access-Control-Allow-Origin: *');
$id = $_GET["barcode"];
$payload = file_get_contents('http://94e74131.ngrok.io/API/EvaluateGiftCard/'.$id);
echo $payload;
?>