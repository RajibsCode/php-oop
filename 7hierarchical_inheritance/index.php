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

$obj = new B;
$obj->getHistory();
$obj = new C;
$obj->getHistory();
$obj = new D;
$obj->getHistory();

?>