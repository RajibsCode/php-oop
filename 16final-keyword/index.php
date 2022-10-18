<?php

// we cant override final class or method
final class A {
    final public function maths($a,$b) {
        echo "addition is ". $a + $b;
    }
}

class B extends A {
    
    public function maths_test($a, $b) {
        echo "Multiplication is: " . $a * $b;
    }
}


$obj = new B;
$obj->maths_test(5,5);

?>