<?php

// php oop composition

final class A {
    final public function maths($a,$b) {
        echo "addition is ". $a + $b;
    }
}

class B {

    private $a;
    function __construct($a) {
        $this->a = $a;
        $this->a->maths(25,14);
    }
    
    public function maths_test($a, $b) {
        echo "Multiplication is: " . $a * $b;
    }
}

$obj = new B(new A)

?>