<?php

  $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://onlinetools.ups.com/accessgateway/v1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "AccessLicenseNumber: DD786045E8AF0D52",
    "Accept: application/json",
    "TargetAppIds: APLP",
    "transId: qwerty1234"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
  ?>