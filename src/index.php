<?php
spl_autoload_register(function($class){
    $path = _DIR_ . '/../'. lcfirst(str_replace('\\','/', $class)) . '.php';
    require $path;
});

?>