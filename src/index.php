<?php
// require_once __DIR__ . '/../autoload.php';
// use App\Controllers\Router;
// use App\Controllers\Routes;

$ch = curl_init();
$url = "https://reqres.in/api/users?page=2";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e= curl_error($ch)){
    echo $e;
}
else {
    $decoded = json_decode($resp);
    print_r($decoded);
}

curl_close($ch);

// $route = new Routes();
// $route->any('/addProduct', '/src/public/index.php');





// $router = new Router();
// $router->post('/addProducts', function() {
//     echo 'Add Products';
// });
// $router->run();
// $router->get('/viewProducts');