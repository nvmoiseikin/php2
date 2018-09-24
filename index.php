<?php 
/*** 1, 2, 3 ex ***/

class Product {
	static $id;
	protected $name;
	protected $price;
	protected $quantity;
	
	public function __construct($id, $name, $price, $quantity){
		$this->$id = $id;
		$this->$name = $name;
		$this->$price = $price;
		$this->$quantity = $quantity;
	}	
	
    public function changeQuantity(n) {
        $quantity += n; 
    }
}

/*** 4 ex ***/
class SaleProduct extends Product {
	
	protected $discount;
	
	public function __construct($id, $name, $price, $quantity, $discount){
		parent:: __construct($id, $name, $price, $quantity);
		$this->$discount = $discount;
	}	
}

?>