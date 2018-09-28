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

/*** 5, 6 ex ***/
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();//1
$a2->foo();//2
$a1->foo();//3
$a2->foo();//4

/*Так как 
    Присваивание выполняется только один раз, при первом вызове функции
    Значение помеченной таким образом переменной сохраняется после окончания работы функции
    При последующих вызовах функции вместо присваивания переменная получает сохраненное ранее значение
	*/
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo(); //1
$b1->foo(); //1
$a1->foo(); //2
$b1->foo(); //2

/*Так как 
   при снаследовании класса создается новый метод
	*/
?>