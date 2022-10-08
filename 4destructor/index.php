<?php 

class demoClass{

	public $company = 'Webapp Tips';
	public $category = 'Blog';

    public function __construct($category,$company){
        $this->company = $company;
        $this->category = $category;
    }


    // destructor method php oop - dstruct method run code at last.
    public function __destruct(){
        echo $this->company . " is the best " . $this->category . "website <hr>";
    }
    
    public function testFunction(){
		echo "This is Test Function <br>";
		exit;
		echo "This is Test Function after exit";
	}
}

$obj = new demoClass('example','example2');
$obj->testFunction();

?>