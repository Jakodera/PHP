<?php
//function which prints hollo Jakodera
function hello (){
    echo 'hello, I am Jakodera'.'<br>';
}
hello();

//functions with arguments

function yapili($name){
    echo "Hello, I am $name".'<br>';
}
yapili('Jakodera');

//sum of two numbers
function sum($a, $b){
    return $a + $b;
}
echo sum(6,8).'<br>';

//second sum function
function sumyapili(...$nums){
   $sum = 0;
   foreach($nums as $n){
       $sum += $n;
   }
   return $sum;
}
echo sumyapili(1,2,3,4,5,6,7).'<br>';

//arrow functions
function arrowf(...$nums){
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo arrowf(1, 2,3,4,5,6,7);
?>
