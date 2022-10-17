<?php 

//hirerarchical inheritance
class A {
    public function categoryName(){
        return "category is lamborgini";
    }
}

class B extends A {
    public function me(){
        return "my favourite car is honda";
    }
    public function getHistory(){
        echo "<hr> Class A : " . $this->categoryName();
        echo "<hr> Class B : " . $this->me();
    }
}

class C extends A {
    public function sibling(){
        return "siblings car is tata nano";
    }
    public function getHistory(){
        echo "<hr> Class A : " . $this->categoryName();
        echo "<hr> Class C : " . $this->sibling();
    }
}

class D extends A {
    public function anotherSibling(){
        return "another siblings car is sedan";
    }
    public function getHistory(){
        echo "<hr> Class A : " . $this->categoryName();
        echo "<hr> Class D : " . $this->anotherSibling();
    }
}

// in hirerarchical inheitance make object for all child class.
$obj = new B;
$obj->getHistory();
$obj2 = new C;
$obj2->getHistory();
$obj3 = new D;
$obj3->getHistory();

?>