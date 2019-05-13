<h1>Check for Prime numbers</h1>
<p> Enter any whole number to determine if it is a prime number</p>
<form>
  <input name="number">
  
  <input type="submit" value="Go!">


</form>

<?php 


  // Validate that the number is whole number, numeric and is greater than 0
  if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)){
     
     $i = 2;
     
     $isPrime = true;
     
     while($i < $_GET['number']){
	
	if($_GET['number'] % $i == 0){
		
	    //Number is Prime
	    $isPrime = false;
	    
	    
	}
	
	$i++;
     
     }
     
     if($isPrime){
     
	echo "<p>".$_GET['number']. " is a prime number </p>";
	
	
     }else{
	
	echo "<p>".$_GET['number']. " is NOT a prime number </p>";
	
     
     }
  
  }else if($_GET){
      
      echo "<p>Please enter a positive whole number. </p>";
  
  }



?>