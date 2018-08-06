<?php

class SquareRoot
{
    public function getSquareRoot($notation)
    {
        $square_root = sqrt($notation);

        return (($square_root - floor($square_root)) == 0);
    }

    public function perfectSquare()
    {
        $square_count = 0;

        for ($counter = 10; $counter <= 10000; $counter++) {
            if ($this->getSquareRoot($counter)) {
                echo "<option>$counter</option>";
                $square_count++;
            }
        }
    }
}

$square_root = new SquareRoot();
$square_root->perfectSquare();

