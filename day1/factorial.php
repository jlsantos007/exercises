<?php
	$numFactorial     = $_POST['numFactorial'];
	$numFactor 	      = 1;
	$prodFactorial    = 0;

	for ($i=1; $i < $numFactorial ; $numFactorial--) { 
		$prodFactorial = $numFactor * $numFactorial;
		$numFactor = $prodFactorial;

	}
	echo "The factorial of ".$_POST['numFactorial']." is =".$prodFactorial;
?>