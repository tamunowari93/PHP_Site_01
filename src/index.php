<?php

    // require_once __DIR__ . '/App/require.php';

    // require_once __DIR__ . '/../vendor/autoload.php';
    // use App\Controllers\App_config;

    if (! defined('App_Version')){
        require_once dirname(__DIR__) . '/autoload.php';
    }
    
    echo "Just Index works with version:" . phpversion();


// use App\Controllers\App_config;
// $LOG_PATH = App_config::get('LOG_PATH', '');
// echo "[LOG_PATH]: $LOG_PATH";

// use App\Controllers\Logger;
// Logger::enableSystemLogs();
// $log_msg = Logger::getInstance();
// $log_msg->info('Hello World');