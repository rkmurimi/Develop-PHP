<?php

// Example of loop statement in PHP
// 05/07/2019

// (1) For Loop
/*
Display all numbers
echo "<p>Display the numbers in the loop</p>";
for($i = 0; $i <= 30; $i++){
  
  echo $i."<br>";
}

// Even Numbers
echo "Display the even numbers in the loop";
for($i = 2; $i <= 30; $i = $i + 2){
  
  echo "<br>".$i."<br>";
}


// Count down from 10 to 0

echo "Count down from 10 to 0";
for($i = 10; $i >= 0; $i--){
  
  echo "<br>".$i."<br>";
}


// Loop through arrays using for-loop
$family = array("Robert", "Buju", "Nia", "Makena", "Zak", "Mae", "Shosho");
for($i = 0; $i < sizeof($family); $i++){
  
  echo "<br>".$family[$i]."<br>";
}




// A better way using forEach Loop
$family = array("Robert", "Buju", "Nia", "Makena", "Zak", "Mae", "Shosho");

foreach ($family as $key => $value){
  
  $family[$key] = $value." Murimi";
  echo "Array item ".$key." is ".$value."<br>";

}

foreach ($family as $key => $value){
  
  
  echo "Array item ".$key." is ".$value."<br>";

}
*/

// (2) While Loop

echo "Display all numbers <br>";
  $i = 0;
  
  while ($i < 10){
  
  echo $i."<br>";
  
  $i++;
  }
  echo "<br><br>";
  // The first 10 numbers in the 5 tables
  
  echo "The first 10 numbers in the 5 tables <br>";
  $i = 5;
  
  while ($i <= 50){
  
  echo $i."<br>";
  
  $i = $i + 5;
  }
  echo "<br><br>";
  // Display values in an array
  echo "Display the list of the array <br>";
  $food = array("Bread", "Pizza", "Rice", "Apples", "Tomatoes");
  
  $i = 0;
  while($i < sizeof($food)) {
  
      echo $food[$i]."<br>";
      
      $i++;
      
   }   
      
      
      
      
  
?>

