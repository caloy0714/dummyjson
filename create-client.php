<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$result = $client = new Client([
        'base_uri' => 'https://dummyjson.com/products/1'
]);

var_dump($result);