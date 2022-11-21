<?php 

//declare class
class car {
    
    //variable with single data
    public $color = "red";

    //variable with array data
    public $carInfo = [
        'brand' => 'lamborgini',
        'model' => 'aventador',
        'class' => 'roadstar',
        'color' => 'green',
        'music_system' => 'JBL',
        'wheel' => 'alloy'
    ];

    //variable with boolean data
    public $isAvailable = false;

    //create method
    public function testFunction($data){

        // loop for print array data
        foreach ($data as $key => $value) {
            echo $key . " : " . $value . "<br>";
        }
    }

}
//declare object
$obj = new car();
// echo $obj->color;

$obj->testFunction([
    'brand' => 'lamborgini',
    'model' => 'aventador',
    'class' => 'roadstar',
    'color' => 'green',
    'music_system' => 'JBL',
    'wheel' => 'alloy'
]);


?>