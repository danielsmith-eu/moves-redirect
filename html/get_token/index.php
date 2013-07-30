<?php

header("Content-Type: application/json");

include("config.php");

$code = $_POST["code"];
$redirect_url = $_POST["redirect_url"];

$url = "https://api.moves-app.com/oauth/v1/access_token?grant_type=authorization_code&code=".$code."&client_id=".$client_id."&client_secret=".$client_secret."&redirect_uri=".$redirect_url;

$ch = curl_init($url);
 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$response = curl_exec($ch);
curl_close($ch);

print $response;
file_put_contents("/tmp/moves.txt", $response);
?>
