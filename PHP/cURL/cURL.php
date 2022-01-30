<?php

$cep = "11730000";
$link = "https://viacep.com.br/ws/{$cep}/json/";

$curl = curl_init($link);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($curl);

curl_close($curl);

$data = json_decode($response, true);

var_dump($data);