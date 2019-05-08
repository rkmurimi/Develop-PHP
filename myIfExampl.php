<?php

// Example of If statement in PHP
// 05/07/2019

$user = "Robert";
$age = 35;
/*
if($user == "Robert"){
  echo "Hello $user";

} else{
      echo "I do not know you";
}



if($age >=18){
    echo "Awesome!!, you may proceed";

} else{
      echo "We are sorry, you are to young to join at the moment";
}
*/
// && -- AND
// || -- OR
// == equivalent

if($user == "Robert" && $age >= 18){
    echo "Welcome $user, you can proceed";

} else {

    echo "We are sorry, either we do not know you or you are too young to join";


}
?>