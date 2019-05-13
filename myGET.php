<?php 

  print_r($_GET);
  



?>

<p>What is your name?</p>
<form>

  <input name="name" type="text">
  
  <input type="submit" value="Go!">

</form>

<?php 

  
  echo "<br><br>";
  
  echo "Hello ".$_GET['name'];



?>