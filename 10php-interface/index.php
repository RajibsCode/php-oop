<?php

//interface 
interface Animal {
    public function makeSound();
}

//class 
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