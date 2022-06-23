<?php
  require_once 'private/classes/Product.php';
  require_once 'private/initialize.php';
    
  // DUPLICATE SKU RETURN ERROR (exception Not caught)
  if($type=="dvd"){
    saveDVD($sku, $name, $price, $size, $description);
    header("Location: /viewProducts.php");
  }
  if($type=="furniture"){
    saveFurniture($sku, $name, $price, $height, $width, $length, $description);
    header("Location: /viewProducts.php");
  }
  if($type=="book"){
    saveBook($sku, $name, $price, $weight_kg, $description);
    header("Location: /viewProducts.php");
  }
  exit;
  
  function saveDVD($sku, $name, $price, $size, $description){
    $dvd = new DVD();
    $dvd->set_sku($sku);
    $dvd->set_name($name);
    $dvd->set_price($price);
    $dvd->set_size($size);
    $dvd->set_description($description);
    $skuD = $dvd->sku();
    $priceD = $dvd->price();
    $sizeD = $dvd->size();
    $addDVD = addDVD($skuD, $name, $priceD, $sizeD, $description);
  }
  
  function saveFurniture($sku, $name, $price, $height, $width, $length, $description){
    $furniture = new Furniture();
    $furniture->set_sku($sku);
    $furniture->set_name($name);
    $furniture->set_price($price);
    $furniture->set_dimensions($height,$width,$length);
    $furniture->set_description($description);
    $skuF = $furniture->sku();
    $priceF = $furniture->price();
    $dimensions = $furniture->dimensions();
    $addFurniture= addFurniture($skuF, $name, $priceF, $dimensions, $description);
  }
  
  function saveBook($sku, $name, $price, $weight_kg, $description){
    $book = new Book();
    $book->set_sku($sku);
    $book->set_name($name);
    $book->set_price($price);
    $book->set_weight_kg($weight_kg);
    $book->set_description($description);
    $skuB = $book->sku();
    $priceB = $book->price();
    $weight = $book->weight_kg();
    $addBook = addBook($skuB, $name, $priceB, $weight, $description);
  }
  
  
?>