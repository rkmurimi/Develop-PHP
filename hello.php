<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>First PHP Script</title>
</head>
<body>

<p>This is a good day !!</p>
<?php

// Address error handling 
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
print ("Hello,  World!");

?>


</body>
</html>
