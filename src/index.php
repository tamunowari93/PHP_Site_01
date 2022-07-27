<?php
require_once __DIR__ . '/../autoload.php';
// use App\Controllers\Router;
use App\Controllers\Logger;


$log = new Logger();
$log->start();





// $router = new Router();
// $router->post('/addProducts', function() {
//     echo 'Add Products';
// });
// $router->run();
// $router->get('/viewProducts');