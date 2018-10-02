<?php
trait mySingleton {
    
	private static $instance;  // Экземпляр объекта

    private function __construct() { /* ... @return Singleton */ } 

    private function __clone() { /* ... @return Singleton */ }

    private function __wakeup()  { /* ... @return Singleton */ }

    public static function getInstance() {
        if ( empty(self::$instance) ){
        self::$instance = new self();
		}
        return self::$instance;
    }
	
    public function doAction() { }
}

class singleton{
	use mySingleton;
}
?>
