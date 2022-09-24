<?php
require "vendor/autoload.php";

$client = new \GuzzleHttp\Client(["base_uri" => "http://httpbin.org"]);
$options = [
    'form_params' => [
        "fruit" => "apple"
       ]
   ]; 
$response = $client->post("/post", $options);

echo $response->getBody();