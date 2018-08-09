    <?php

class Kaprekar
{
    public function actionGetKaprekar()
    {
        for ($base_num = 1; $base_num < 1000; $base_num++) {
            $this->actionIsKaprekar($base_num);
        }
    }

    public function actionIsKaprekar($base)
    {
        $square_num = pow($base, 2);
        $square_str = (string)$square_num;
        $mid        = (int)strlen($square_str) / 2;
        $left       = (int)substr($square_str, 0, $mid);
        $right      = (int)substr($square_str, $mid);
        $sum        = $left + $right;

        if ($sum === $base) {
            echo "<option>$base</option>";
        }
    }
}

$kaprekar = new Kaprekar();
$kaprekar->actionGetKaprekar();
?>
