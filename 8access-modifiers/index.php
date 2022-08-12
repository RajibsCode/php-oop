<?php

class myClass{

    //constructor must be public
    function __construct(){
        echo "this is construct method <hr>";
    }

    public function publicFunction(){
        echo "this is public method <hr>";       
    }

    protected function protectedFunction(){
        echo "this is protected method <hr>";       
    }

    private function privateFunction(){
        echo "this is private method <hr>";       
    } 
    
    public function baseFunction(){
        $this->publicFunction();
        $this->protectedFunction();
        $this->privateFunction();
    }


}

class anotherClass extends myClass{
    public function callingFunction(){
        $this->publicFunction();
        $this->protectedFunction();
        $this->privateFunction();
    }
}

// $obj = new myClass();
// $obj->publicFunction();
// $obj->protectedFunction();
// $obj->privateFunction();

// $obj = new anotherClass();
// $obj->callingFunction();

$obj = new myClass();
$obj->baseFunction();


?>