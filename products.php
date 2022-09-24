<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;
//use GuzzleHttp\Psr7\Request;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);
<<<<<<< HEAD
$response = $client->get('https://dummyjson.com/products');
$code = $response->getStatusCode();
$body = $response->getBody();
$products=json_decode($body)->products;
//var_dump($products)
=======
//$client = new GuzzleHttp\Client(['base_uri' => 'https://dummyjson.com/']);
$response = $client->request('GET', '/products');
$code = $response->getStatusCode();
$body = $response->getBody();
$products=json_decode($body);
var_dump($products)
>>>>>>> 2b6b4268941ed0b100c0aa8b9f62d80e5f80eb75
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </head>
  <body>
<<<<<<< HEAD
  <div class="container">
            <table>
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Category</th>
                    <th scope="col">Thumbnail</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($products as $product){ ?>
                    <tr>
                        <th scope="row"><?php print $product->id ?></th>
                        <td><?php print $product->title ?></td>
                        <td><?php print $product->description ?></td>
                        <td><?php print $product->price ?></td>
                        <td><?php print $product->brand ?></td>
                        <td><?php print $product->category ?></td>
                        <td><img src="<?php print $product->thumbnail?>" width="100px"></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
=======
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
>>>>>>> 2b6b4268941ed0b100c0aa8b9f62d80e5f80eb75
    </body>
</html>





