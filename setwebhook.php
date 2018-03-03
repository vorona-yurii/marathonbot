<?php
require 'config.php';

function regHandler($token, $murl)
{
    $url = "https://api.telegram.org/bot" . $token . "/setWebhook";
    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => array('url' => $murl)
    );
    curl_setopt_array($ch, $optArray);

    $result = curl_exec($ch);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    curl_close($ch);
}

$token = '490693503:AAGMGKnt_cbwfIFfmVmU5AzkPNCjpeID6EQ';
$handlerurl = 'https://telegrambot.yuv.com.ua/telegram/handler.php';

regHandler($bot_api_key, $hook_url);
?>