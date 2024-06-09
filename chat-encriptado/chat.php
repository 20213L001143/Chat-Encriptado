<?php
header('Content-Type: application/json');

// Leer el cuerpo de la solicitud
$input = json_decode(file_get_contents('php://input'), true);
$encryptedMessage = $input['message'];

// Simulación de recibir el mensaje encriptado y enviarlo de vuelta
$response = [
    'message' => $encryptedMessage
];

echo json_encode($response);
?>
