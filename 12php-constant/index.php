<?php

//declare constant with define
define('RAJIB','hi,this is rajib');

//way of declare constant with const keyword
const DEMO_CONSTANT = "its demo constant <br>";

echo RAJIB;
echo "<br>";
echo DEMO_CONSTANT;

//constant in class
class demoClass1 {
    const DEMO = "constant in parent class <br>";
    function getConstants(){
        // use const from own class
        echo self::DEMO;
    }
}
class demoClass2 extends demoClass1 {
    const DEMO = "constant in child class <br>";
    function getConstants2(){
        // use const from parent class
        echo parent::DEMO;
    }
}

$obj = new demoClass2();
// echo $obj::DEMO;
$obj->getConstants();
$obj->getConstants2();





?>