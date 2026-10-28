<?php
function obtenerPiloto($numero) {
    $url = 'https://api.openf1.org/v1/drivers?driver_number=' . $numero . '&session_key=latest';
    $conexion = curl_init();

    curl_setopt_array($conexion, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ));

    $respuesta = curl_exec($conexion);
    
    if ($respuesta == false) {
        $error = curl_error($conexion);
        die('Error al consultar OpenF1: ' . htmlspecialchars($error));
    }

    $pilotos = json_decode($respuesta);

    if (empty($pilotos)) {
        die('No se encontró el piloto número ' . $numero . ' en la sesión más reciente.');
    }

    return $pilotos[0];
}

$numerosPilotos = array(16, 44);
$pilotos = array();

foreach ($numerosPilotos as $numero) {
    $pilotos[] = obtenerPiloto($numero);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pilotos de Fórmula 1</title>
</head>
<body>
    <h1>Pilotos de la sesión más reciente de F1</h1>
    <ul>
        <?php foreach ($pilotos as $piloto) { ?>
            <li>
                <p>
                    <strong>Número:</strong>
                    <?php echo htmlspecialchars((string) $piloto->driver_number); ?>
                </p>
                <p>
                    <strong>Nombre:</strong>
                    <?php echo htmlspecialchars((string) $piloto->full_name); ?>
                </p>
                <p>
                    <strong>Escudería:</strong>
                    <?php echo htmlspecialchars((string) $piloto->team_name); ?>
                </p>
            </li>
        <?php } ?>
    </ul>
</body>
</html>
