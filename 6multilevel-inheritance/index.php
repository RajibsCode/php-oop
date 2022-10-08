<?php

//multi level inheritance php
class A {
    public function grandParent(){
        return "grand father's age is 80.";
    }
}

class B extends A {
    public function father(){
        return "father's age is 50.";
    }    
}

class C extends B {
    public function son(){
        return "sons age is 20.";
    }
    public function getHistory(){
        echo "Class A : " . $this->grandParent();
        echo "<hr> Class B : " . $this->father();
        echo "<hr> Class C : " . $this->son();
    }
}
// in multilevel inheritance make object for last child
$obj = new C;
$obj->getHistory();


?>