<?php

//declare constant
define('RAJIB','hi,this is rajib');

//way of declare constant
const DEMO_CONSTANT = "its demo constant <br>";

echo RAJIB;
echo "<br>";
echo DEMO_CONSTANT;

//constant in class
class demoClass1 {
    const DEMO = "constant in parent class <br>";
    function getConstants(){
        echo self::DEMO;
    }
}
class demoClass2 extends demoClass1 {
    const DEMO = "constant in child class <br>";
    function getConstants2(){
        echo parent::DEMO;
    }
}

$obj = new demoClass2();
// echo $obj::DEMO;
$obj->getConstants();
$obj->getConstants2();





?>