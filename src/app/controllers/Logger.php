<?php 
namespace App\Controllers;

use Monolog\ErrorHandler;
use Monolog\Handler\StreamHandler;

class Logger extends \Monolog\Logger
{
    private static $log_sys = [];

    public function __construct($key = "app", $app_config = null)
    {
        parent::__construct($key);

        if (empty($app_config)) {
            $LOG_PATH = App_config::get('LOG_PATH', __DIR__ . '/../log-files');
            $app_config = [
                'logFile' => "{$LOG_PATH}/{$key}.log",
                'logLevel' => \Monolog\Logger::DEBUG
            ];
        }

        $this->pushHandler(new StreamHandler($app_config['logFile'], $app_config['logLevel']));
    }

    public static function getInstance($key = "app", $app_config = null)
    {
        if (empty(self:: $log_sys[$key])) {
            self:: $log_sys[$key] = new Logger($key, $app_config);
        }

        return self:: $log_sys[$key];
    }

    public static function enableSystemLogs()
    {

        $LOG_PATH = App_config::get('LOG_PATH', __DIR__ . '/../../log-files');
        // Error Log
        self::$log_sys['error'] = new Logger('errors');
        self:: $log_sys['error']->pushHandler(new StreamHandler("{$LOG_PATH}/errors.log"));
        ErrorHandler::register(self::$log_sys['error']);

        // Request Log
        $data = [
            $_SERVER,
            $_REQUEST,
            trim(file_get_contents("php://input"))
        ];
        self::$log_sys['request'] = new Logger('request');
        self::$log_sys['request']->pushHandler(new StreamHandler("{$LOG_PATH}/request.log"));
        self::$log_sys['request']->info("REQUEST", $data);
    }
}



// // start session & get time
// $time = time();
// session_start();

// // store an array
// $sessionID = $_SERVER['REMOTE_ADDR'];
// $startTime = $_SESSION[$time];


// // User IP
// // Time & Date


// // remove cookie
// if(isset($_COOKIE[session_name()])){
//     setcookie(session_name(),'',$time - 3600, '/');
// }
// $endTime = $_SESSION[$time];
// $duration = $endTime - $startTime;

// // unset data in $_SESSION
// $_SESSION[] = array();

// // destroy the session
// session_destroy();
    