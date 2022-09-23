<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;
//use GuzzleHttp\Psr7\Request;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);
//$client = new GuzzleHttp\Client(['base_uri' => 'https://dummyjson.com/']);
$response = $client->request('GET', '/products');
$code = $response->getStatusCode();
$body = $response->getBody();
$products=json_decode($body);
var_dump($products)
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </head>
  <body>
    <table>
      <tr>Id</tr>
      <tr>Title</tr>
      <tr>Decription</tr>
      <tr>Price</tr>
      <tr>Brand</tr>
      <tr>Category</tr>
      <?php foreach($products as $product){?>
        <td><?php print $product->id; ?></td>
        <?php }?>
    </table>
    </body>
</html>





