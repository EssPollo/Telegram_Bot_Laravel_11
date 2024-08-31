<?php

// Reemplaza 'YOUR_BOT_TOKEN' con el token de tu bot
$botToken = '7282463946:AAFzag9J74FNht341731l_U6XLGEzpDGm7s';
$apiUrl = "https://api.telegram.org/bot{$botToken}/deleteWebhook";

// Eliminar el webhook
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

$responseArray = json_decode($response, true);

if ($responseArray['ok']) {
    echo "Eliminado.php se ejecuto correctamente." . PHP_EOL;
} else {
    echo "Error al eliminar el Eliminado.php: " . $responseArray['description'] . PHP_EOL;
}
