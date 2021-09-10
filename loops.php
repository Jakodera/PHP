<?php

//while loop
// while ($a <= 10) {
//     # code...
// }

//while  counter
$counter = 0;
while($counter < 10){
    echo $counter.'<br>';
    $counter++;
}

//do while

 do {
    echo $counter.'<br>';
    $counter++;
 }while($counter < 0);

 //for loop
 for ($i=0; $i < 0; $i++) { 
     echo $i.'<br>';
 }

 //for each
 $pupils = ["Mary", "Waiyaki", "Kinuthia"];
 foreach ($pupils as $i => $pupils){
     echo $i.' '.$pupils.'<br>';
 }

 // Iterate over associative array
 $thurwa = [
    'Name' => 'Jakodera',
    'county' => 'Homabay',
    'others' => ['Rachuonyo', 'Kodera'],
];
foreach ($thurwa as $key => $value){
    if (is_array($value)){
        echo $key .' '.implode(",", $value).'<br>';
    }else{
        echo $key .' '. $value .'<br>';
    }
    
}
?>