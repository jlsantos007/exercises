<?php

class SiteController extends Controller
{
    /**
     * Declares class-based actions.
     */
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

    public function actionPractice6()
    {
        $expected_year  = 2015;
        $expected_month = 9;
        $expected_day   = 25;
        $returned_year  = 2015;
        $returned_month = 9;
        $returned_day   = 29;

        if ($returned_day >= $expected_day && $returned_month === $expected_month && $returned_year === $expected_year) {
            $book_fine = abs($expected_day - $returned_day) * 15;
            $book_fine = number_format($book_fine, 2, '.', ',');
        } elseif ($returned_day >= $expected_day && $returned_month > $expected_month && $returned_year === $expected_year) {
            $book_fine = abs($expected_month - $returned_month) * 500;
            $book_fine = number_format($book_fine, 2, '.', ',');
        } elseif ($returned_year > $expected_year) {
            $book_fine = number_format(10000, 2, '.', ',');
        } else {
            $book_fine = number_format(0, 2);
        }
        $this->render('practice6', array('book_fine' => $book_fine));
    }

    public function actionPractice7()
    {
        $model          = new DecentNumberForm;
        $no_of_3s       = '3';
        $no_of_5s       = '5';
        $num_multiplier = 0;

        if (isset($_POST['DecentNumberForm'])) {
            $key_number = implode($_POST['DecentNumberForm']);

            switch ($key_number % 3) {
                case 0:
                    $num_multiplier = 0;
                    break;
                case 1:
                    $num_multiplier = 2;
                    break;
                case 2:
                    $num_multiplier = 1;
                    break;
            }

            if (5 * $num_multiplier <= $key_number) {
                $decent_number = str_repeat($no_of_5s, (int)$key_number - 5 * (int)$num_multiplier).
                    str_repeat($no_of_3s, 5 * (int)$num_multiplier);
            } else {
                $decent_number = '-1';
            }

            Yii::app()->user->setFlash('decent_number',
                'The Decent number is '.$decent_number);
            $this->refresh();
        }
        $this->render('practice7', array('model' => $model));
    }

    public function actionPractice8()
    {
        $square_count = 0;
        $square_root  = array();

        for ($base_number = 10; $base_number <= 10000; $base_number++) {
            $square_number  = sqrt($base_number);
            $round_number   = floor($square_number);
            $perfect_square = $square_number - $round_number;

            if ($perfect_square == 0) {
                $square_root[$square_count] = $base_number;
                $square_count++;
            }
        }

        $this->render('practice8', array('square_root' => $square_root, 'square_count' => $square_count));
    }
}