<?php
require "vendor/autoload.php";
use GuzzleHttp\Client;

//$client = new \GuzzleHttp\Client(["base_uri" => "https://dummyjson.com/products/2"]);
$response = $client->delete('https://dummyjson.com/products/2');

var_dump($response);