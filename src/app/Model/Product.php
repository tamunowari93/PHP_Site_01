<?php

namespace App\Model;

abstract class Model
{
    public function load(array $data): self
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
        return $this;
    }
}

class Product extends Model
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

	public function __destruct();

}
class DVD extends Product
{
    private $size;

    public function __construct($sku, $name, $price, $size)
	{
        parent::__construct();
		$this->size = $size;
	}

	public function __destruct();
}
  
class Furniture extends Product
{
    private $dimensions;

    public function __construct($sku, $name, $price, $dimensions)
	{
        parent::__construct();
		$this->dimensions = $dimensions;
	}

	public function __destruct();
}
  
class Book extends Product
{
    private $weight;

    public function __construct($sku, $name, $price, $weight)
	{
		parent::__construct();
		$this->weight = $weight;
	}

	public function __destruct();
}
  

$product = (new Product())->load([
    'sku' => 'htmlspecial(__POST('sku'))',
    'name' => 'htmlspecial(__POST('name'))',
    'price' => 'htmlspecial(__POST('price'))',
  ]);


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