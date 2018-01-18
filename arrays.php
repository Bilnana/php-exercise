<?php
/**
 * Created by PhpStorm.
 * User: biljana
 * Date: 1/18/18
 * Time: 3:52 PM
 */

/**
Array pop test

$cars = array("hhhh"=>"Volvo","llll"=> "BMW","kkkk" =>"Toyota");

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
 */


/**
Var_dump test

$biljana= 1.2 ;
var_dump($biljana);
 */


/**
Function merge two arrays

function arrayMerge(){
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
}
arrayMerge();
echo "<br/>";
 */


/**
 * While loop

function piramide(){
$x = 6;

while($x > 0) {
$y = $x;
while ($y > 1) {
$y = $y - 1;
echo "$y <br/>";
}
$x = $x - 1;
echo "<br/>";
}
}
piramide();

 */


/** Task php for eac key value

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

foreach ($ceu as $key => $var){
echo "The capital of " . $key . " is " . $var ."<br/>";
}
 */


/*
 * Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
 *
 */

    $x = array(1, 2, 3, 4, 5);
    unset($x[3]);
    var_dump($x);

    echo "<br/>";
    $x = array_values($x);
    var_dump($x);
