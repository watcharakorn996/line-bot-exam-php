<?php


$access_token = '27dSrRPH63AnxpqY48cpWMSNxVo/Pv3BNkaF5H8XHCLMV9Xod60XJo405M/k1skfRuxDHALIWaLJC+bZ3V1SHo7RuexdE1dymM4NR8N8/WmLdpbBBPx8tRdXjuAhplQOUDnO0FIZktlUUoo1VYIRxAdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

