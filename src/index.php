<?php

// require_once __DIR__ . '/App/require.php';

require_once __DIR__ . '/../vendor/autoload.php';
use App\Controllers\App_config;
use App\Controllers\Router;

$router = new Router();
$router->get('/', function() {
    echo 'Home Page';
});
$router->get('/about', function() {
    echo 'About Page';
});
$router->run();


echo 'Composer not Running!';



// use App\Controllers\App_config;
// $LOG_PATH = App_config::get('LOG_PATH', '');
// echo "[LOG_PATH]: $LOG_PATH";

// use App\Controllers\Logger;
// Logger::enableSystemLogs();
// $log_msg = Logger::getInstance();
// $log_msg->info('Hello World');