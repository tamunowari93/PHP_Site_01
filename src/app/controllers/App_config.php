<?php

namespace App\Controllers;

class App_config
{
    private static $app_config;
    
    public static function get($key, $default = null)
    {
      if (is_null(self::$app_config)) {
          self::$app_config = require_once(__DIR__.'/../../app_config.php');
      }
  
      return !empty(self::$app_config[$key])?self::$app_config[$key]:$default;
    }
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

  // echo $sku;
  // // Pass Form Data to Model Controller
    
  // // Validate and Save to Database


?>