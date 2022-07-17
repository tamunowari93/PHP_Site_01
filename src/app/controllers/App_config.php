<?php

namespace App\Controllers;

// use Monolog\Level;
// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;
// use Monolog\Handler\FirePHPHandler;

class App_config
{
  // public function logConfig()
  // {
  //   // Create the logger
  //   $logger = new Logger('app_logger');
    
  //   // Now add some handlers
  //   $logger->pushHandler(new StreamHandler(__DIR__.'/app.log', Level::Debug));
  //   $logger->pushHandler(new FirePHPHandler());
    
  //   $logger->info('Logger is ready');
    
  // }

  public function log()
  {
    dump('run log');
  }

  // public function sessionConfig()
  // {
  //   // start session & get time
  //   $time = time();
  //   session_start();
    
  //   // store an array
  //   $sessionID = $_SERVER['REMOTE_ADDR'];
  //   $startTime = $_SESSION[$time];
  //   $endTime = $_SESSION['lastaccess'];
    
  //   // Time difference since user sent last request
  //   $duration = $endTime - $startTime;

  //   // remove session
  //   if( isset( $endTime ) && ( $duration <= 0 ) ) 
  //   {
  //     // Clear the session
  //     session_unset();
  //     // Destroy the session
  //     session_destroy();
  //   }
  // }
    
}
 

  // // Get Form Data & Redirect to List Page
  // $sku = htmlspecialchars($_POST['sku']);
  // $name = htmlspecialchars($_POST['name']);
  // $price = htmlspecialchars($_POST['price']);
  // $type = htmlspecialchars($_POST['prodtype']);
  // $size = htmlspecialchars($_POST['size']);
  // $height = htmlspecialchars($_POST['height']);
  // $width = htmlspecialchars($_POST['width']);
  // $length = htmlspecialchars($_POST['length']);
  // $weight_kg = htmlspecialchars($_POST['weight']);

  
  // // Pass Form Data to Model Controller
    
  // // Validate and Save to Database