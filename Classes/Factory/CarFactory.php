<?php
namespace Classes\Factory;
use Classes\Factory\CarSedan;
use Classes\Factory\CarSuv;

class CarFactory{
	
	public static function build( $type = '' ){

		if($type == ''){
			throw new Exception('Invalid Car Type');
		}

		switch ($type) {
			case 'sedan':
				return new CarSedan();
				break;
			case 'suv':
				return new CarSuv();
				break;
			default:
				return null;
		}

	}
}