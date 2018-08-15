<?php

$this->pageTitle   = Yii::app()->name.' - Practice Four';
$this->breadcrumbs = array(
    'Practice 4',
);
?>

    <h1>Get Factorial of a Number</h1>

<?php if (Yii::app()->user->hasFlash('factorial')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('factorial'); ?>
    </div>

<?php else: ?>

    <div class="form">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id'                     => 'factorial-form',
        'enableClientValidation' => true,
        'clientOptions'          => array(
            'validateOnSubmit' => true,
        ),
    )); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'Base Number:'); ?>
        <?php echo $form->textField($model, 'base_number'); ?>
        <?php echo $form->error($model, 'base_number'); ?>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton('Calculate'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>

<?php endif; ?>