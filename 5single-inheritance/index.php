<?php
//single inheritance
class ParentClass{
    public $car = 'my favurite car is honda <hr>';

    function returnValue(){
        echo $this->car;
    }
    function setCarName($carname){
        echo $this->car = $carname;
    }
}

class ChildClass extends ParentClass{
        
    function setNewCar($brand){
        echo $this->car = $brand;        
    }
}

// $obj = new ParentClass;

//create object only for childclass
$obj = new ChildClass();

$obj->returnValue();
$obj->setCarName('my favurite car is lamborgini <hr>');

$obj->setNewCar('my favurite car is tata nano');

?>