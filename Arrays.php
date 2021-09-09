<?php
//variables ,can contain more than one value
//declaring an array
$students = ["John", "Doe", "Munene"];
echo '<pre>'; //make it readable
var_dump($students);
echo '</pre>';

//get element by index
echo $students[0].'<br>';

//set element by index/ append
$students[3] = 'Jakodera';
echo '<pre>'; //make it readable
var_dump($students);
echo '</pre>';

//check if array has element
isset($students[3]); //true

//array_push - Adds to the end of the array
//array_pop -Remove element from an array
//array_unshift - add element at the beginning of the array
//array_shift - remove element from the beggining
// expode- split the string into an array

$string ="men,women,boys,girls";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

//implode - combine array elements into string
echo implode("&", $students);

// in_array - check if exist in the array
echo '<pre>';
var_dump(in_array("mary", $students));
echo '</pre>';

//array_search - search element index in the array

//array_merge - merge two arrays
$pupils = ["Mary", "Waiyaki", "Kinuthia"];
echo '<pre>';
var_dump(array_merge($pupils, $students)); 
 // or
var_dump(array_merge([...$pupils, ...$students]));
echo '</pre>';

//sorting
rsort($students);
echo '<pre>';
var_dump(array_merge($students));
echo '</pre>';

//Associative array
$thurwa = [
    'Name' => 'Jakodera',
    'county' => 'Homabay',
    'others' => ['Rachuonyo', 'Kodera'],
];
echo '<pre>';
print_r($thurwa);
echo '</pre>';
?>