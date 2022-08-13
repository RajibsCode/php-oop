<?php

//integar type
function int_fun (int $a, int $b) {
    return $a+$b;
}

//float type
function float_fun (float $a, float $b) {
    return $a+$b;
}

//float type
function bool_fun (bool $a, bool $b) {
    return $a;
}

//array type
function array_fun (array $values) {
    foreach ($values as $value) {
        echo $value;
    }
}

//string type
function str_fun (string $str){
	echo $str;
}

//class type
class test {
	function hi(){
		echo "Welcome to my code";
	}
}


function call_Class (test $abc){
	$abc->hi();
}

// object type
class abc {
    function test(){
        echo "its in abc class";
    }
}

function call_obj(object $abc){
    $abc->test();
}



echo int_fun(587,555);
echo "<br>";
echo float_fun(5.25,25.21);
echo "<br>";
echo bool_fun(true,false);
echo "<br>";
echo array_fun(['rajib','sajib','papri','monika']);
echo "<br>";
echo str_fun('rajib sarder');
echo "<br>";
call_Class(new test);
echo "<br>";
call_obj(new abc);

?>