<?php 

// Arrays
$myArray = array("Nia", "Makena", "Zak", "Buju", "Mae");

//adding an item at the end of an array
$myArray[] = "Naima";
// If you want arry to be displayed, you need to use print_r instead of echo cmd
//echo $myArray;
echo "The items of myArray : ";
print_r($myArray); //.do not use echo when trying to display array, r--readable
// displaying a single item
echo "<p>fourth item in the myArray is: $myArray[3]</p>";

// Another way to define an array is to define them manually
// php arrays are associative, you can use anything as an index
$anotherArray[0] = "pizza";
$anotherArray[1] = "Toast";
$anotherArray[2] = "Ice Cream";
$anotherArray[3] = "Coffee";
$anotherArray[8] = "Cake";
$anotherArray["myfav"] = "pizza";
echo "<br><br>";
echo "The items of anotherArray : ";
print_r($anotherArray);
echo "<br><br>";

// remove item from an array using unset
//example remove Ice Cream from anotherArray

unset($anotherArray[2]);
echo "The items of anotherArray after deleting ice cream: ";
print_r($anotherArray);
echo "<br><br>";
$langArray = array(
		  "France" => "French",
		  "Kenya" => "Swahili",
		  "England" => "English",
		  "China" => "Mandarin",
		  "India" => "Hindi",
		  "Mexico" =>"Spanish");
		  

echo "The items of langArray : ";		  
print_r($langArray);

// length/size of the array
echo "<br><br>";


echo "The size of anotherArray is: ";
echo sizeof($anotherArray);
echo "<br><br>";
echo "The size of myArray is: ";
echo sizeof($myArray);
echo "<br><br>";
echo "The size of langArray is: ";
echo sizeof($langArray);

?>