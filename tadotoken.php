<?php
header("Access-Control-Allow-Origin: *");
try {
    @$response = file_get_contents("https://my.tado.com/oauth/token?client_id=tado-webapp&grant_type=password&password=" . $_GET['password'] . "&scope=home.user&username=" . $_GET['username']);
    $response = json_decode($response);
    echo @$response->access_token;
} catch (Exception $err) {
    // Don't do anything.
}

?>