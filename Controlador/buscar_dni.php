<?php
// Datos
$token = 'apis-token-8709.ZOrRX5nY6R8GNQ3gxh4J78DSIpNqk9Jm';
$dni = $_REQUEST['dni_visitante'];
// Iniciar llamada a API
$curl = curl_init();

// Buscar dni
curl_setopt_array(
  $curl,
  array(
    CURLOPT_URL => 'https://api.apis.net.pe/v2/reniec/dni?numero=' . $dni,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 2,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
      'Referer: https://apis.net.pe/consulta-dni-api',
      'Authorization: Bearer ' . $token
    ),
  )
);

$response = curl_exec($curl);
echo $response;
//curl_close($curl);
// Datos listos para usar
//$persona = json_decode($response);