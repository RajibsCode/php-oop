<?php

abstract class carParts{
    //abstract function dont have body
    // abstract method can be only public or protected
    // dont create any object for abstract class
    abstract function getCarBody();
    abstract function getChassis();
    abstract function getTransmission();
    abstract function getEngine();
    abstract function getColor($color);
}
class lamborgini extends carParts{
    
    // need declare all abstract class
    public function getCarBody(){
        return "this car have a nice metalic body <br>";
    }
    public function getChassis(){
        return "this car have a Chassis <br>";
    }
    public function getTransmission(){
        return "this car have a Transmission <br>";
    }
    public function getEngine(){
        return "this car have a Engine <br>";
    }    
    public function getColor($color){
        return "this car is $color <br>";
    }

    public function getData(){
        echo $this->getCarBody();
        echo $this->getChassis();
        echo $this->getTransmission();
        echo $this->getEngine();
        echo $this->getColor('black');
    }
}
$obj = new lamborgini();
$obj->getData();
?>