<?php

$email = $_POST["email"];

if(!isset($_POST["email"]) || empty($_POST["email"])){
    header("Location: re-captcha.php");
}

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(
    array(
        "secret" => "SECRET_KEY_PRIVATE",
        "response" => $_POST["g-recaptcha-response"],
        "remoteip" => $_SERVER['REMOTE_ADDR']
    )
));

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

curl_close($curl);

$recaptcha = json_decode($response, true);

if(!isset($recaptcha['success']) || !$recaptcha['success']){
    die("Falha ao válidar e-mail...");
}

die("E-mail <b>{$email}</b> válidado com sucesso!");