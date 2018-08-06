<?php

class PracticeThree
{
    public function rightTriangle()
    {
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }
}

$practice_three = new PracticeThree();
$practice_three->rightTriangle();

