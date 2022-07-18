<?php

namespace App\Controllers;


class Router
{
    private array $handler;
    private const METHOD_POST = 'POST';
    private const METHOD_GET = 'GET';
    
    
    public function get(string $path, $handler): void
    {
        $this->addHandler(self::METHOD_GET, $path, $handler); 
    }
    
    public function post(string $path, $handler): void
    {  
        $this->addHandler(self::METHOD_POST, $path, $handler); 
    }
    
    public function addHandler(string $method, string $path, $handler): void
    {
        $this->handlers[$method . $path] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler,
        ];   
        
    }
    
    public function run() 
    { 
        $requestUri = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $requestUri['path'];
        $method = $_SERVER['REQUEST_METHOD'];

        $callback = null;
        foreach ($this->handlers as $handler) {
            if ($handler['path'] === $requestPath && $method === $handler['method']){
                $callback = $handler['handler'];
                
            }
        }
        
        if (!$callback) {
            Header("HTTP/1.0 404 Not Found");
            return;
        }
        
        call_user_func_array($callback, [
            array_merge($_GET, $_POST)
        ]);
    }
}