<?php

class Matrix
{

    public function actionPrintMatrix($matrix)
    {
        $matrix_size = count($matrix);
        for ($x = 0; $x < $matrix_size; ++$x) {
            echo "<tr>";
            for ($y = 0; $y < $matrix_size; ++$y) {
                echo "<td>".$matrix[$x][$y]."</td>";
            }
            echo "</tr>";
        }
    }

    public function actionCounterClockwise($matrix, $times_rotation)
    {
        $row_length    = count($matrix);
        $column_length = count($matrix);
        $start_row     = 0;
        $start_column  = 0;

        while ($row_length > 1 && $column_length > 1) {
            $matrix_length   = ((2 * $row_length) + (2 * $column_length)) - 4;
            $actual_rotation = $times_rotation % $matrix_length;

            for ($rotation = 0; $rotation < $actual_rotation; $rotation++) {
                $left_top_corner = $matrix[$start_row][$start_column];

                for ($column_index = $start_column; $column_index < $start_column + $column_length - 1; $column_index++) {
                    $matrix[$start_row][$column_index] = $matrix[$start_row][$column_index + 1];
                }

                $last_column = $start_column + $column_length - 1;
                for ($row_index = $start_row; $row_index < $start_row + $row_length - 1; $row_index++) {
                    $matrix[$row_index][$last_column] = $matrix[$row_index + 1][$last_column];
                }

                $last_row = $start_row + $row_length - 1;
                for ($column_index = $start_column + $column_length - 1; $column_index >= $start_column + 1; $column_index--) {
                    $matrix[$last_row][$column_index] = $matrix[$last_row][$column_index - 1];
                }

                for ($row_index = $start_row + $row_length - 1; $row_index >= 1 + $start_row; $row_index--) {
                    $matrix[$row_index][$start_column] = $matrix[$row_index - 1][$start_column];
                }

                $matrix[$start_row + 1][$start_column] = $left_top_corner;
            }
            $start_row++;
            $start_column++;

            $row_length    -= 2;
            $column_length -= 2;
        }

        return $matrix;
    }
}
?>
