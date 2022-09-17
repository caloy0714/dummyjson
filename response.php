<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'https://dummyjson.com/products/1'
]);

$response = $client->get('https://dummyjson.com/products/1');
$code = $response->getStatusCode();
$body = $response->getBody();

var_dump($body);