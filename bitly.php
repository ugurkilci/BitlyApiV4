<?php

/*
* Author: Uğur KILCI
* Bitly Version: 4
*/

$uzunlink = 'https://girisimzel.com';
$apiv4 = 'https://api-ssl.bitly.com/v4/bitlinks';
$AccessToken = '';

$data = array(
    'long_url' => $uzunlink
);
$payload = json_encode($data);

$header = array(
    'Authorization: Bearer ' . $AccessToken,
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload)
);

$ch = curl_init($apiv4);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$result = curl_exec($ch);

print_r($result);
