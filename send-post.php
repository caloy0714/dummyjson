<?php
require "vendor/autoload.php";

$client = new \GuzzleHttp\Client(["base_uri" => "https://dummyjson.com/products/1"]);
$options = [
	'json' => [
		'key' => 'value'
	]
];
$response = $client->post("https://dummyjson.com/products/1", $options);
$code = $response->getStatusCode();
$body = $response->getBody();

var_dump($body);
//var_dump(json_decode($options, true));