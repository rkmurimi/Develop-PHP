<?php
/* Learning how to create variable in php
   Developer: R. K. Murimi
   Date: May 02, 2019
   Variables -- var
*/
// When working with variables in php we use the $ symbol

$name = "Robert";
echo "<p>My name is $name</p>";

$str1 = "This is the first part of a sentence"; 
$str2 = "and this is the second part";

// We use a dot (.) to concatenate
echo $str1." ".$str2;

// Numbers
$myNumber = 55;
$mycalculation = $myNumber * 105;
echo "<p>My answer is $mycalculation</p>";


// Boolean Variable
// Note: in php true returns 1 but false returns nothing NOT 0

$myBool = false;

echo "<p>Is this statement true? ".$myBool."</p>";

// storing variables within variables

$variableName = "name";
// This will just return variable name Example of display is name
echo "<p>This will display ".$variableName."</p>";

// This however will display the actual content Example Robert
echo "<p>This will display ".$$variableName."</p>";



?>