<?php



require "vendor/autoload.php";

$access_token = '27dSrRPH63AnxpqY48cpWMSNxVo/Pv3BNkaF5H8XHCLMV9Xod60XJo405M/k1skfRuxDHALIWaLJC+bZ3V1SHo7RuexdE1dymM4NR8N8/WmLdpbBBPx8tRdXjuAhplQOUDnO0FIZktlUUoo1VYIRxAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '697d490071792456ccb928cbc210b051';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







