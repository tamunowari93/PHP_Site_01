<?php 

namespace App\Controllers;


class Logger
{
    public function start(){
        session_start();
        echo "Session Started!";
    }

}

    