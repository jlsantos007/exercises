<?php

$this->pageTitle   = Yii::app()->name.' - Practice 7';
$this->breadcrumbs = array(
    'Practice 7',
);
?>

    <h1>Get the Largest Decent Number</h1>

<?php if (Yii::app()->user->hasFlash('decent_number')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('decent_number'); ?>
    </div>

<?php else: ?>

    <div class="form">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id'                     => 'decent-form',
        'enableClientValidation' => true,
        'clientOptions'          => array(
            'validateOnSubmit' => true,
        ),
    )); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'If N digit is:'); ?>
        <?php echo $form->textField($model, 'key_number'); ?>
        <?php echo $form->error($model, 'key_number'); ?>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton('Generate'); ?>
    </div>


    <?php $this->endWidget(); ?>

</div>

<?php endif; ?>