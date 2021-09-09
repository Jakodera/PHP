<?php

$age = 26;
$salary = 26000;

if($age < 26)
    {echo "1";}
else
    {echo "2";}

//Difference between == and ===
if($age == 26){
    echo "1".'<br>';
}

if($age ===26){ //executes to false
    echo "2".'<br>';
}

$age == 26; //true
$age == '26'; //true
$age === 26; //true
$age === '26'; //false also types are checked

//if AND
if($age ==26 && $salary ==26000){
    echo 'Do something';
}
if($age ==26 || $salary ==2000){
    echo 'Do something'.'<br>';
}

//Ternary if
echo $age > 30 ? 'Old' : 'Young';

echo $salary ? : 26000;

//null coalescing operator

echo isset ($name) ?  $name : 'John Doe';

//switch

$myName = 'steven'; //steven , odiwuor, jakodera
switch ($myName) {
    case 'Jakodera':
        echo 'Jakodera';
        break;
    case 'Odiwuor':
        echo 'Odiwuor';
        break;
        
    
    default:
        echo 'invalid Name';
        break;
}
?>
