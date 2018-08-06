<?php

class PracticeFour
{
    public function factorial($notation)
    {
        $factor  = 1;
        $product = 0;

        for ($counter = 1; $counter < $notation; $notation--) {
            $product = $factor * $notation;
            $factor  = $product;
        }

        return $product;
    }
}

$practice_four = new PracticeFour();
$factorial     = $practice_four->factorial($_POST['numFactorial']);

echo "The factorial of ".$_POST['numFactorial']." is = ".$factorial;

