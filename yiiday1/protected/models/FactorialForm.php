<?php
/**
 * Created by PhpStorm.
 * User: john.delossantos
 * Date: 13/08/2018
 * Time: 2:29 PM
 */

class FactorialForm extends CFormModel
{
    public $base_number;

    public function rules()
    {
        return array(
            array('base_number', 'numerical', 'integerOnly'=>true),
            array('base_number', 'required'),
        );
    }
}