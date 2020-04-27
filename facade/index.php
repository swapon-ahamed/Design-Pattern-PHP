<?php
include '../autoload.php';
/**
	Faced design pattern

	Facade design pattern under the category of structural patterns.
	The same action is required in multiple places within your application.

	You have to place the same code again and again in different places. You have done that, but after a few days you find that something needs to be changed in that code. 

	Solutin: 
	As a solution, what you should be doing is to create a lead controller, which handles all of the repeating code.

	If we need to introduce any change in the process, then we will just need to change the lead controller instead of making the change in all places where we used that code.


	* Multiple object's have a common interface. Here is given an ecommerce site how to place order.

*/

use Classes\Facades\Facade;

$prodId = 100;// $_GET['prodId'];
$orderFaced = new Facade($prodId);
$order = $orderFaced->generateOrder();

var_dump($order);