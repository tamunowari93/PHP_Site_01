<?php 

namespace App\Controllers;


trait Logger
{
    public function sessionStart(){
        session_start();
        
    }


    
}

    