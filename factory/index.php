<?php
include '../autoload.php';
/**
	Factory design pattern

    A software factory is an object that is responsible to creating and delivering other 
	objects based on incoming parameters.

*/

use Classes\Factory\CarFactory;


$sedan = CarFactory::build('sedan');
echo '<br>';
$sub = CarFactory::build('suv');



