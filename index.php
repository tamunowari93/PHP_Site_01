<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'https://reqres.in',
]);

$response = $client ->request('GET', '/api/users', [
    'query' => [
        'page' => '2'
    ]
]);

$body = $response->getBody();
$arr_body = json_decode($body);
echo "<pre>"; print_r($arr_body); echo "</pre>";



?>