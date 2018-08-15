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

    public function actionPractice1()
    {
        $count_print = array();

        for ($count = 1; $count <= 10; $count++) {
            if ($count <= 9) {
                $count_print[$count - 1] = $count." - ";
            } else {
                $count_print[$count - 1] = $count;
            }
        }
        $this->render('practice1', array('count_print' => $count_print));
    }

    public function actionPractice2()
    {
        $sum = 0;

        for ($count = 1; $count < 30; $count++) {
            $sum += $count;
        }
        $this->render('practice2', array('sum' => $sum));
    }

    public function actionPractice3()
    {
        $right_triangle = array();

        for ($row = 1; $row <= 5; $row++) {
            for ($column = 0; $column < $row; $column++) {
                $right_triangle[$row - 1][$column] = "*";
            }
        }
        $this->render('practice3', array('right_triangle' => $right_triangle));
    }

    public function actionPractice4()
    {
        $model        = new FactorialForm;
        $start_number = 1;
        $factorial    = 0;

        if (isset($_POST['FactorialForm'])) {
            $base_number = implode($_POST['FactorialForm']);

            for ($counter = 1; $counter < $base_number; $base_number--) {
                $factorial    = (int)$start_number * (int)$base_number;
                $start_number = (int)$factorial;
            }

            Yii::app()->user->setFlash('factorial',
                'The Factorial of '.implode($_POST['FactorialForm']).' is '.$factorial);
            $this->refresh();
        }
        $this->render('practice4', array('model' => $model));
    }

    public function actionPractice5()
    {
        $fizz_buzz = array();

        for ($counter = 1; $counter <= 1000; $counter++) {
            if ($counter % 3 === 0 && $counter % 5 === 0) {
                $fizz_buzz[$counter - 1] = 'FizzBuzz';
            } elseif ($counter % 3 === 0) {
                $fizz_buzz[$counter - 1] = 'Fizz';
            } elseif ($counter % 5 === 0) {
                $fizz_buzz[$counter - 1] = 'Buzz';
            } else {
                $fizz_buzz[$counter - 1] = $counter;
            }
        }
        $this->render('practice5', array('fizz_buzz' => $fizz_buzz));
    }
}