<?php

//__LINE__ Constant show current line number

echo "current line number is".__LINE__;

//__FILE__ Constant show current file path

echo "<br>current file path is".__FILE__;




class demoClass{

    function getClassName(){
        // __CLASS__ Constant show current class
        echo "<br> current class is " . __CLASS__;
    }
    function getMethodName(){
        // __METHOD__ Constant show current class
        echo "<br> current method is " . __METHOD__;
    }

}

$obj = new demoClass();
$obj->getClassName();
$obj->getMethodName();



// __FUNCTION__ Constant show current function

function test(){
    echo "<br> current function is " . __FUNCTION__;
}
test()






?>