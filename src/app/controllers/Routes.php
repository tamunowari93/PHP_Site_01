<?php
namespace App\Controllers;

class Routes
{
    public function execute(array $params = []): void
    {
        require_once __DIR__ . '/../View/addProduct.phtml';
    }
    
}

?>