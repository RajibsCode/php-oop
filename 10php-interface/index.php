<?php

//interface 
// dont create obejct for interface class
// interface only work with public
interface Animal {
    public function makeSound();
}

//implements 
class Cat implements Animal {
    public function makeSound(){
        echo "meow";
    }
}
class Dog implements Animal {
    public function makeSound(){
        echo "Bark";
    }
}

$cat = new Cat();
$dog = new Dog();

$animals = array($cat,$dog);

foreach ($animals as $animal) {
    $animal->makeSound();
}

?>