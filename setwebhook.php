<?php
require 'config.php';
require 'vendor/autoload.php';

use Telegram\Bot\Api;

$telegram = new Api(BOT_API_KEY);

$response = $telegram->setWebhook(['url' => HOOK_URL]);

?>