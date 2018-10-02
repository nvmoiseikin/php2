<?php
class C extends MainClass {
	
	public function __construct($myQuantity){
		$this->quantity = $myQuantity;
		$this->calcProductProfit();
		/*** tests ***/
		$this->getProductProfit();
		$this->getFullClassProfit();
		$this->getFullProfit();
		
	}
	
	/*** calculating ***/
	private function calcProductProfit(){
		$this->productProfit = $this->quantity*MainClass::mainPrice;
		$this->addClassProfit($this->productProfit);
		MainClass::$fullProfit += $this->productProfit;
	}
	
	/*** getters ***/
	public function getFullClassProfit(){
		echo "Общий доход ВЕСОВЫХ товаров составил ".$this->addClassProfit(0)." денежных едениц<br>";
	}
	
	public function getProductProfit(){
		echo "Общий доход ЭТОГО товара составил ".$this->productProfit." денежных едениц<br>";
	}
	
}