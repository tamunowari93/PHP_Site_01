<?php

namespace App\Controllers;


class App_config
{
  
  public function load()
  {
  }
  public function page01(){
    $title = "Add Product";
    // Add Body Features
    print "<h1>Hello User, </h1><br> <p> This is the {$title} Page</p>";
  }

}
 

  /* Get Form Data & Redirect to List Page 
  */
  // $sku = htmlspecialchars($_POST['sku']);
  // $name = htmlspecialchars($_POST['name']);
  // $price = htmlspecialchars($_POST['price']);
  // $type = htmlspecialchars($_POST['prodtype']);
  // $size = htmlspecialchars($_POST['size']);
  // $height = htmlspecialchars($_POST['height']);
  // $width = htmlspecialchars($_POST['width']);
  // $length = htmlspecialchars($_POST['length']);
  // $weight_kg = htmlspecialchars($_POST['weight']);

  