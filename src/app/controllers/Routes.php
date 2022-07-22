<?php
namespace App\Controllers;

class Routes
{
    public function addProduct(array $params = []): void
    {
        require_once __DIR__ . '/../View/addProduct.phtml';
    }
    
}

?>