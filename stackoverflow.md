# Enviar los datos del formulario a EnviaYa

El formulario envía la guía y la paquetería a `tracking.php` usando POST.
En ese archivo puedo recoger los datos y enviarlos a la API:

```php
<?php
include_once 'key.php';

$guia = $_POST['guia'];
$paqueteria = $_POST['paqueteria'];

$datos = array(
    'carrier_account' => null,
    'api_key' => $apiKey,
    'carrier' => $paqueteria,
    'shipment_number' => $guia
);

$conexion = curl_init();

curl_setopt_array($conexion, array(
    CURLOPT_URL => 'https://enviaya.com.mx/api/v1/trackings',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($datos),
    CURLOPT_HTTPHEADER => array('Content-Type: application/json')
));

$respuesta = curl_exec($conexion);

if ($respuesta == false) {
    die('Error al conectar con EnviaYa: ' . curl_error($conexion));
}

$envio = json_decode($respuesta);
?>

```

`$_POST` recoge lo que escribió el cliente en el formulario. `$datos` prepara
esa información para la API, y cURL la envía. La API devuelve una respuesta;
con `json_decode()` puedo leer el estado y el evento del envío.

En `key.php` guardo mi clave en la variable `$apiKey`.
