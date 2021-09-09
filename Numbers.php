

<?php
//declaring numbers
$a = 5;
$b =5;
$c = 5.5;

//arithmetic operations
echo ($a + $b).'<br>';
echo ($a % $b).'<br>';

//assignment operations
$a += $b;
echo $a.'<br>';

//increment operator
echo $a++.'<br>'; //value taken, printed then increased by 1
echo ++$a;

//decrement operator
echo $a--.'<br>';
echo --$a;

//conversion
$strNumber = '5.66';
$number =(int)$strNumber;
var_dump($number).'<br>';

//Number functions
echo 'pow(2,3)'.pow(2, 3).'<br>';

//Number formating
$num = 1234567.1234567;
echo number_format($num, 5,'.', ' ');
?>