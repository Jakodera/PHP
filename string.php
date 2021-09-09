<?php
// creating a string
$age =26;
$singleq = 'Hello Jakodera now @ $age';
$doubleq ="Hello Jakodera now @ $age";

echo $singleq .'<br>';
echo $doubleq. '<br>';

//string functions
echo strrev($doubleq).'<br>';

//multiline text and line breaks
$longText = "
Hrllo, this
is a <b>long<b>
text line
";
echo $longText;
echo nl2br($longText);
?>