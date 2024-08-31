<?php

// Reemplaza 'YOUR_BOT_TOKEN' con el token de tu bot
$botToken = '7282463946:AAFzag9J74FNht341731l_U6XLGEzpDGm7s';
$apiUrl = "https://api.telegram.org/bot{$botToken}/getUpdates";

// Obtener las actualizaciones
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

$responseArray = json_decode($response, true);

// Verificar la respuesta y extraer el ID del grupo
if ($responseArray['ok']) {
    foreach ($responseArray['result'] as $update) {
        if (isset($update['message']['chat']) && ($update['message']['chat']['type'] == 'group' || $update['message']['chat']['type'] == 'supergroup')) {
            $groupId = $update['message']['chat']['id'];
            echo "Group ID: " . $groupId . PHP_EOL;
            // Aquí puedes devolver o almacenar el ID del grupo
            return;
        }
    }
} else {
    echo "Error al obtener actualizaciones: " . $responseArray['description'] . PHP_EOL;
}
