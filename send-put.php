<?php
require "vendor/autoload.php";

$client = new \GuzzleHttp\Client(["base_uri" => "https://dummyjson.com/products/1"]);
$options = [
	'json' => [
		"key" => "value"
	]
];
$response = $client->put('https://dummyjson.com/products/1', $options);

var_dump($response);
//var_dump(json_decode($options, true));
