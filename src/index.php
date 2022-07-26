<?php

    require_once dirname(__DIR__) . '/autoload.php';
    
    use App\Controllers\App_config;
    
    // $router = new Router();

    // $router->get('/', function () {
    //     echo 'Home Page';
    // });

    $message = new App_config();
    $message->log();

    


// use App\Controllers\App_config;
// $LOG_PATH = App_config::get('LOG_PATH', '');
// echo "[LOG_PATH]: $LOG_PATH";

// use App\Controllers\Logger;
// Logger::enableSystemLogs();
// $log_msg = Logger::getInstance();
// $log_msg->info('Hello World');