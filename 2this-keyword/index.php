<?php

class car {
    public $car = 'lamborgini';

    public function favCar($name){
        //this keyword for change variable value
        $this->car = $name;
        echo '<hr> my favourite car is ' . $this->car . "<hr>";
    }
}

$obj = new car();
echo $obj->car;

$obj->favCar('BMW');

echo $obj->car;



?>