<?php 

class demoClass{

	public $company = 'Webapp Tips';
	public $category = 'Blog';

    public function __construct($category,$company){
        $this->company = $company;
        $this->category = $category;
    }

    public function testFunction(){
		echo "This is Test Function <br>";
		exit;
		echo "This is Test Function after exit";
	}

    // destructor method php oop
    public function __destruct(){
        echo $this->company . " is the best " . $this->category . "website <hr>";
    }

}

$obj = new demoClass('example','example2');
$obj->testFunction();

?>