<?php	

$getal = $_GET['getal'];
if ($getal % 2 == 0) {
	echo $getal . " is even";
} elseif ($getal % 1 == 0) { 
	echo $getal . " is oneven";
}

?>