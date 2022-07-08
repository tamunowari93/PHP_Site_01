<?php

namespace App\Model;

class Product
{
    private $sku;
    private $name;
    private $price;

    public function __construct($sku, $name, $price)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    public function getProduct(): string
    {
        return $this->sku . " " . $this->name . " " . $this->price;
    }
}
  


//     protected $description;

//     public function __construct($args=[]) {
//       $this->sku = $args['SKU'] ?? '';
//       $this->name = $args['Name'] ?? '';
//       $this->price = $args['Price'] ?? '';
//       $this->prod_type = $args['Type'] ?? '';
//       $this->description = $args['Description'] ?? '';
//     }

//     public function sku() {
//       return ($this->sku);
//     }
//     public function name() {
//       return ($this->name);
//     }
//     public function price() {
//       return ($this->price);
//     }
//     public function prod_type() {
//       return $this->prod_type;
//     }
//     public function description() {
//       return ($this->description);
//     }
//     public function set_name($value) {
//       $this->name = ($value);
//     }
//     public function set_price($value) {
//       $value = ("$" . $value);
//       $this->price = ($value);
//     }
//     public function set_type($value) {
//       $this->prod_type = ($value);
//     }
//     public function set_description($value) {
//       $this->description = ($value);
//     }
    
//   }
// // SUBCLASS FOR VARIOUS PRODUCT TYPES
//   class DVD extends Product {
//     protected $size;
//     function __construct($args=[]) {
//       parent::__construct();
//       $this->size = $args['Size (MB)'] ?? '';
//     }
//     public function size() {
//       return number_format($this->size) . 'kg';
//     }
//     public function set_sku($value) {
//       $value = ("DVD-0" . $value);
//       $this->sku = ($value);
//     }
//     public function set_size($value) {
//       $value = ($value."MB");
//       $this->size = floatval($value);
//     }
//   }
//   class Furniture extends Product {
//     protected $dimensions;
//     function __construct($args=[]) {
//       parent::__construct();
//       $this->dimensions = $args['Dimensions (HxWxL)'] ?? '';
//     }
//     public function dimensions() {
//       return ($this->dimensions);
//     }
//     public function set_sku($value) {
//       $value = ("FRN-0" . $value);
//       $this->sku = ($value);
//     }
//     public function set_dimensions($v1,$v2,$v3) {
//       $value = ($v1 ."x" . $v2 ."x" . $v3);
//       $this->dimensions = ($value);
//     }
//   }
//   class Book extends Product {
//     protected $weight_kg;
//     function __construct($args=[]) {
//       parent::__construct();
//       $this->weight_kg = $args['Weight (kg)'] ?? '';
//     }
//     public function weight_kg() {
//       return number_format($this->weight_kg);
//     }
//     public function set_sku($value) {
//       $value = ("BK-0" . $value);
//       $this->sku = ($value);
//     }
//     public function set_weight_kg($value) {
//       $value = ($value."Kg");
//       $this->weight_kg = floatval($value);
//     }
//   }