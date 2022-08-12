<?php

// static keyword and resolution operator use

class demoClass {
    
    public static $name = "Rajib";
    
    protected static function demoFunction(){
        echo "this is a demo function with demo class";
    }

    public function getData(){
        self::demoFunction();
    }

}
class childClass extends demoClass {

	public function getStaticData(){
		echo demoClass::$name;
		echo "<br>";
		parent::demoFunction();
	}
}

$obj = new childClass();
$obj->getData();
$obj->getStaticData();

?>