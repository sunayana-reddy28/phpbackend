<?php
    // original code
    echo "My first code in php";
    //string declaration
    $stringvar ="Hello world!";
    //float declaration
    $floatvar = 42.98;
    //boolean declaration
    $booleanvar = True;
    //integer declaration
    $integervar = 679;
    //array declaration
    $arrayvar = array("apple","banana","orange");
    //associative array declaration
    $assocarrayvar = array("first_name"=>"john","last_name"=>"doe","age"=>25);
    //object
    //create new stdobject class
    $obj = new stdClass;
    //assign properties
    $obj -> name ="ramu";
    $obj -> age =24;
    

    //output format
    echo "string :" .$stringvar . "</br>";
    echo "float :" .$floatvar . "</br>";
    echo "boolean:" .($booleanvar ? 'true' : 'false' ). "</br>";
    echo "integer :" .$integervar . "</br>";
    echo "arry :" ;
    print_r($arrayvar);
    echo "assocarray:" ;
    print_r($assocarrayvar);
    echo "name :" .$obj->name . "</br>";
    echo "age :" .$obj->age . "</br>";






                
?>