<?php

include("config.php");

$code = $_POST["code"];
$redirect_url = $_POST["redirect_url"];

$url = "https://api.moves-app.com/oauth/v1/access_token?grant_type=authorization_code&code=".$code."&client_id=".$client_id."&client_secret=".$client_secret."&redirect_uri=".$redirect_url;

print file_get_contents($url);
?>
