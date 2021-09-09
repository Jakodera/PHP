
<?php

//variables
//containers that stores some values
//String, integer. float, boolean,Null, Array, Object, Resource


//declaring variables
$name = 'Jakodera';
$age = 26;
$isMale = true;
$height = 1.98;
$salary =  null;

//print the variables
echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';

//print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';

//print the variable and type
var_dump($age);
var_dump($name);

//variable checking functions
is_string($name) ; //evaluates to true

//check if a variable is declared

isset($name); //true

//constants===cant be changed once declared
define('PI', 3.14);
echo PI.'<br>'
?>