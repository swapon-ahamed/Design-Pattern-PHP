<?php
include '../autoload.php';
/**
	Singleton design pattern

	The singleton pattern is a design pattern that restricts the instantiation of a class to one object.

	The Singleton Pattern ensures that a class can only have one instance and it provides a single way to retrieve an instance of itself.

*/

use Classes\Singleton\Database;


$db = new Database();
$db = new Database();
$db = new Database();



