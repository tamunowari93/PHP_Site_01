<?php
require_once 'App/require.php';

use App\Model\Product as Product;


$product = new Product('firstProduct-001', 'Jaguar', '90000');
echo $product->getProduct();

// use GuzzleHttp\Client;
  
// $client = new Client([
//     // Base URI is used with relative requests
//     'base_uri' => 'https://reqres.in',
// ]);
  
// $response = $client->request('GET', '/api/users', [
//     'query' => [
//         'page' => '2',
//     ]
// ]);
  
// $body = $response->getBody();
// $arr_body = json_decode($body);
// echo "<pre>"; print_r($arr_body); echo"</pre>";