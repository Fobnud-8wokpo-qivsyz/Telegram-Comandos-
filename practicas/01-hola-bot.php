<?php
/**
 * Práctica 01 — Hola Bot (Telegram Bot API + webhook)
 *
 * 1. Crea un bot con @BotFather y copia el token.
 * 2. Define BOT_TOKEN aquí o mejor con variable de entorno.
 * 3. Sube este archivo a un hosting con HTTPS.
 * 4. Configura el webhook:
 *    https://api.telegram.org/bot<TOKEN>/setWebhook?url=https://tu-dominio.com/01-hola-bot.php
 *
 * Comandos: /start  /help
 */

$BOT_TOKEN = getenv('TELEGRAM_BOT_TOKEN') ?: 'PEGA_TU_TOKEN_AQUI';
$API = 'https://api.telegram.org/bot' . $BOT_TOKEN . '/';

function tg_request($method, $params = []) {
  global $API;
  $ch = curl_init($API . $method);
  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $params,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT => 30,
  ]);
  $raw = curl_exec($ch);
  curl_close($ch);
  return json_decode($raw, true);
}

$update = json_decode(file_get_contents('php://input'), true);
if (!$update || !isset($update['message'])) {
  http_response_code(200);
  exit('ok');
}

$msg = $update['message'];
$chat_id = $msg['chat']['id'];
$text = trim($msg['text'] ?? '');

if ($text === '/start') {
  tg_request('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "Hola. Soy tu bot de práctica.\nUsa /help para ver comandos.",
    'reply_markup' => json_encode([
      'keyboard' => [['Hola'], ['/help']],
      'resize_keyboard' => true,
      'one_time_keyboard' => true,
    ]),
  ]);
} elseif ($text === '/help' || $text === 'Hola') {
  tg_request('sendMessage', [
    'chat_id' => $chat_id,
    'text' => $text === 'Hola'
      ? 'Hola otra vez. Escribe /help.'
      : "Comandos:\n/start — inicio\n/help — esta ayuda",
  ]);
} else {
  tg_request('sendMessage', [
    'chat_id' => $chat_id,
    'text' => 'Recibí: ' . $text . "\nPrueba /start o /help",
  ]);
}

http_response_code(200);
echo 'ok';
