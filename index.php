<?php

require_once realpath("/vendor/autoload.php");

$addProduct = new App/Product();
echo $addProduct->add();


?>