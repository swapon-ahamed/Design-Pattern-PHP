<?php 
namespace Classes\Singleton;

class Database {

	private static $instance;

	public function __construct(){
		if(! self::$instance){
			echo 'Create new one instance.<br>';
			return self::$instance = $this;
		}else{
			echo 'Old instance.<br>';
			return self::$instance;
		}
	}
	
}