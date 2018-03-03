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
    curl_close($ch);
}

regHandler($bot_api_key, $hook_url);
?>