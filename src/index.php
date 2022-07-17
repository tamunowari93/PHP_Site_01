<?php

// require_once __DIR__ . '/App/require.php';
use App\Controllers\App_config;

require_once __DIR__ . '/../vendor/autoload.php';


$log = new App_config();
$log->log();

// use App\Controllers\App_config;
// $LOG_PATH = App_config::get('LOG_PATH', '');
// echo "[LOG_PATH]: $LOG_PATH";

// use App\Controllers\Logger;
// Logger::enableSystemLogs();
// $log_msg = Logger::getInstance();
// $log_msg->info('Hello World');