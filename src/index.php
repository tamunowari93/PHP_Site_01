<?php
require_once __DIR__ . '/../autoload.php';

use App\Controllers\Logger;
$log = new Logger();
$log->load('addProduct');

// use App\Controllers\Router;
// $router = new Router();
// $router->get('/test', function(){
//     echo 'Awesome!';
//   });

// $router = new Router();
// $router->post('/addProducts', function() {
//     echo 'Add Products';
// });
// $router->run();
// $router->get('/viewProducts');