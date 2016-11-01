<?php
//if-else condition
$t = 2;
$y = 4;
if($t < $y) {
  echo " it is greater \n";
} else {
  echo "it is not greater \n";
}


//isset()
$myvar = 'variable1';
if (isset($myvar)) {
  echo "This var is set, so it will print. \n";
} elseif (empty($myvar)) {
  echo "This var is not empty"; 
} else {
  echo "This var is empty";
}


//example of a NULL 
error_reporting(E_ALL);
$var = NULL;
if (is_null($var)) {
var_dump(is_null($var));
}

?>
