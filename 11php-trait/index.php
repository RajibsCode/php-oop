<?php

//declare trait and use it anywhere
trait demoTrait {

    public function demoFunction() {
        return "this is demo function with demo trait <br>";
    }
}
trait anotherTrait {

    public function anotherFunction() {
        return "this is another function with another trait<br>";
    }
}

class demoClass {
    use demoTrait,anotherTrait;
}

class childClass extends demoClass {
    function getData(){
        echo $this->anotherFunction();
    }
}

$obj = new childClass();
$obj->getData();
echo $obj->demoFunction();
echo $obj->anotherFunction();

?>