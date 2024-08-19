<?php
//-----------------------------------------------------------------------
// 100 consultas de DNI
//---------------------------------------
/*$token = 'b057b723c57393037e4d8db0f24ea0c6d73ec18b3f21a9cb3b94bbad3afcb92a';
$params = json_encode(['dni' => $_REQUEST['dni_visitante']]);
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://apiperu.dev/api/dni",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_POSTFIELDS => $params,        
    CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'Content-Type: application/json',
        'Authorization: Bearer ' . $token
    ],        
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}*/

//*************************************************************



//-----------------------------------------------------------------------
// 200 consultas de DNI
//---------------------------------------
// Datos
/*$token = 'cGVydWRldnMucHJvZHVjdGlvbi5maXRjb2RlcnMuNjZjMTA3Y2E5ZmE0MTczZjYxMzIwMmJj';
$dni = $_REQUEST['dni_visitante'];
// Iniciar llamada a API
$curl = curl_init();

// Buscar dni
curl_setopt_array(
  $curl,
  array(
    CURLOPT_URL => 'https://api.perudevs.com/api/v1/dni/simple?document='.$dni.'&key='.$token,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 2,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
      'Referer: https://api.perudevs.com/api/v1/dni/simple',
      //'Authorization: Bearer ' . $token
    ),
  )
);

$response = curl_exec($curl);
echo $response;
//curl_close($curl);
// Datos listos para usar
//$persona = json_decode($response);*/


//-----------------------------------------------------------------------
// 100 consultas de DNI al dia
// 1000 consultas de DNI al mes
//---------------------------------------
$token = 'Xycs6epsj3qNe8o5iwKzhjFNyHflcyGc8sMOlyEYPwtozrteku';
$dni = $_REQUEST['dni_visitante'];
$curl = curl_init();
curl_setopt_array($curl, array(CURLOPT_URL => 'https://api.perufacturacion.com/api?api_token='.$token.'&json=dni&id='.$dni,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_SSL_VERIFYPEER => false
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
echo "cURL Error #:" . $err;
} else {
echo $response;
}