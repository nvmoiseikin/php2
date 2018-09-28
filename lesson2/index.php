<?php

abstract class MainClass{
	
	/*** variables ***/
	const mainPrice = "10";
	private $quantity = 0;
	private $productProfit = 0;
	static $fullProfit = 0;
	
	protected  function addClassProfit($productProfit){
		static $classProfit = 0;
		$classProfit += $productProfit;
		return $classProfit;
	}
	
	/*** setters ***/
	abstract public function __construct($myQuantity);
	
	/*** getters ***/
	abstract public function getFullClassProfit();
	
	abstract public function getProductProfit()
	
	public function getFullProfit(){
		echo "Общий доход составил ".MainClass::$fullProfit." денежных едениц<br>";
	}
	
	/*** asserts ***/
	public function __get($name) {
        echo "__get, property - {$name} is not exists <br>";
    }

}

/*** autoload() ***/
function __autoload($className) {
	$fileName = $className.".php";
	include_once($fileName);
}
	
/*** tests ***/
$obj1 = new A(1);
$obj2 = new B(3);
$obj3 = new A(5);
$obj4 = new A(7);
$obj5 = new C(9.5);
$obj6 = new C(10.5);
$obj7 = new B(13);

?>