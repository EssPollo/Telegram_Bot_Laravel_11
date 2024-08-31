<?php
//Ejecuta 1ro esto php eliminar.php
// Reemplaza 'TELEGRAM_BOT_TOKEN' con el token de tu bot, este esta en .env o el botFather te lo dio
$botToken = 'TELEGRAM_BOT_TOKEN';
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
