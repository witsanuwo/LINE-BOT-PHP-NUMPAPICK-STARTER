<?php
$access_token = 'fybwIoIf6IZx9bxwu17v3Um5AruhYai8MMbttBeZD8a+/rIgv05xGAsKlXgq4UQToVKhifapyxUqeTCcwsgp+YJvc2wj427vDfYt6fzfTWAkpbJ62eI3dJs6qTfX+O5OoQJMKhqIJnGzGzsGXjzjtAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
