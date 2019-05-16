<?php 
  
  if($_POST){
      
      
  
      $members = array("Nia","Makena","Zak","Buju","Mae","Daddy");
      
      $isMember = false;
      
      foreach($members as $value){
	  
	  if($value == $_POST['name']){
	      
	      $isMember = true;
	      
	   }
	}
	if($isMember){
	
	    echo "<p>"."<font color = 'green'>"."Hello there ".$_POST['name']." !"."</font>"."</p>";
	
	} else{
	
	    echo "<p>"."<font color = 'red'>"."We are sorry ".$_POST['name']." you are not a member of this club yet!"."</font>"."</p>";
	    
	}
  }
  
  



?>

  
  <form method="post">
      <p>What is your name?</p>
      
      <p><input type="text" name="name"></p>
  
      <p><input type="submit" value="Submit"></p>

</form>

