<?php

class SiteController extends Controller
{
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class'     => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page'    => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('error', $error);
            }
        }
    }

    public function actionPractice9()
    {
        $kaprekar_num = array();
        $index        = 0;

        for ($base_num = 1; $base_num < 1000; $base_num++) {
            $square_num = pow($base_num, 2);
            $square_str = (string)$square_num;
            $mid        = (int)strlen($square_str) / 2;
            $left       = (int)substr($square_str, 0, $mid);
            $right      = (int)substr($square_str, $mid);
            $sum        = $left + $right;

            if ($sum == $base_num) {
                $kaprekar_num[$index] = $sum;
                $index++;
            }
        }
        $this->render('practice9', array('kaprekar_num' => $kaprekar_num));
    }

    public function actionPractice10()
    {
        $model = new RotationForm;

        if (isset($_POST['RotationForm'])) {
            $model->attributes = $_POST['RotationForm'];
            $row_length        = $model->row_length;
            $column_length     = $model->column_length;
            $rotation          = $model->rotation;
            $matrix            = array();
            $count             = 0;

            for ($row = 0; $row < $row_length; ++$row) {
                for ($column = 0; $column < $column_length; ++$column) {
                    $count += 1;
                    $matrix[$row][$column] = "<td>".$count."</td>";
                }
            }
            $rotated_matrix = $this->actionCounterClockwise($column_length, $matrix, $row_length, $rotation);
            $new_matrix     = $this->actionPrintMatrix($rotated_matrix);

            $this->render('matrix', array('matrix' => $matrix, 'new_matrix' => $new_matrix));
        } else {
            $this->render('practice10', array('model' => $model));
        }
    }

    public function actionCounterClockwise($column_length, $matrix, $row_length, $times_rotation)
    {
        $start_row    = 0;
        $start_column = 0;

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

    public function actionPrintMatrix($matrix)
    {
        $matrix_size = count($matrix);

        for ($row = 0; $row < $matrix_size; ++$row) {
            for ($column = 0; $column < $matrix_size; ++$column) {
                '<td>'.$matrix[$row][$column].'</td>';
            }
        }

        return $matrix;
    }
}