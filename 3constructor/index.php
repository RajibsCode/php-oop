<?php

class defaultConstructorClass{

    public $category = "Blog";
    public $company = "Webapp Tips";
    //default constructor method
    public function __construct(){
        echo $this->company . " is the best " . $this->category . "website <hr>";
    }
}

class parameterizedConstructorClass{
    public $category = "Blog";
    public $company = "Webapp Tips";
    //parameterized constructor method
    public function __construct($company,$category){
        $this->company = $company;
        $this->category = $category;
        echo $this->company . " is the best " . $this->category . " Channel";
    }
}

// for default constructor
$obj = new defaultConstructorClass();

// for parameterized constructor
$obj = new parameterizedConstructorClass('Next Website','youtube');
?>