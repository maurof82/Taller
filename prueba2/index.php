<?php
$handler = curl_init();
curl_setopt($handler, CURLOPT_URL, "http://localhost:8080/hello/ja");
curl_setopt($handler, CURLOPT_POST,0);
$response = curl_exec ($handler);
echo $response;
curl_close($handler);
