<?php 

namespace App\Controllers;


class Logger
{
    public function load($route) {
        session_start();
        $host  = $_SERVER['HTTP_HOST'];
        $extra = $route.'.php';
        header("Location: http://$host/$extra",TRUE,302);
        exit;
        echo "Session Started!";
    }

}

    