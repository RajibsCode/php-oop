<?php

// static keyword and resolution operator use

// use static keyword for access function anywhere whithout create object

class demoClass {
    
    public static $name = "Rajib";
    
    protected static function demoFunction(){
        echo "this is a demo function with demo class";
    }

    public function getData(){
        // use method from own class
        self::demoFunction();
    }

}
class childClass extends demoClass {

	public function getStaticData(){
        // print variable from parent class
		echo demoClass::$name;
		echo "<br>";
        // use method from parent class
		parent::demoFunction();
	}
}

$obj = new childClass();
$obj->getData();
$obj->getStaticData();

?>