<?php
$access_token = 'N/h001PQ4GZ/ocMxZztKtM4bPDSJopxKjviFIcWGl0muLEyfCLMgxAZyxFjn47eeoVKhifapyxUqeTCcwsgp+YJvc2wj427vDfYt6fzfTWAFPJ8yRPZ6qn/ZiyynBWBLh/t8h7eGFh5Mw/H0yESV9wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
