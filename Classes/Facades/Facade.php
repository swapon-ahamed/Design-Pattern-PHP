<?php
namespace Classes\Facades;
use Classes\Facades\Discount;
use Classes\Facades\ShippingCharge;
use Classes\Facades\Order;


class Facade {
	public $productID = '';

	public function __construct($productID) {
		$this->productID = $productID;
	}

	public function generateOrder(){

		if( $this->qtyCheck() ){
			// testing purpose echo;
			echo $this->addToCart();
			echo "<br>";
			echo $this->calulateShipping();
			echo "<br>";
			echo $this->applyDiscount();
			echo "<br>";
			echo $this->placeOrder();
			echo "<br>";
		}

	}

	private function addToCart(){
		return 'cart';
	}

	private function qtyCheck(){
		$qty = 2; // comes form database
		return $qty > 0 ? true: false;
	}

	private function applyDiscount(){
		$discount = new Discount();
		return $discount->applyDiscount();
	}
     
    private function calulateShipping(){
    	$shipping = new ShippingCharge();
    	return $shipping->calculateCharge();
    }

    private function placeOrder(){
    	$order = new Order();
    	return $order->generateOrder();
    }
}
