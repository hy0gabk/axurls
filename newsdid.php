<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://vault-api.stardust.gg/v1/profile",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"applicationId\": \"5ef75b96-0ac3-4f66-b5c9-eb5cf10d2202\",\n  \"name\": \"\"\n}",
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
    "x-api-key: 31258db4-70f1-45b4-bfee-efbb121c4f1b"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
