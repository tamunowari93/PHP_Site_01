<?php

require_once __DIR__ . '/App/require.php';

use App\Controllers\Logger;
Logger::enableSystemLogs();
$log_msg = Logger::getInstance();
$log_msg->info('Hello World');

use App\Controllers\App_config;
$LOG_PATH = App_config::get('LOG_PATH', '');
echo "[LOG_PATH]: $LOG_PATH";