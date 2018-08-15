<?php

$this->pageTitle   = Yii::app()->name.' - Practice 10';
$this->breadcrumbs = array(
    'Practice 10',
);
?>

    <h1 align="center">Matrix Anti-Clockwise Rotation</h1>

<?php if (Yii::app()->user->hasFlash('matrix')): ?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('matrix'); ?>
    </div>
<?php else: ?>

    <div class="form">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id'                     => 'matrix-form',
            'enableClientValidation' => true,
            'clientOptions'          => array(
                'validateOnSubmit' => true,
            ),
        )); ?>

        <div class="row">
            <?php echo $form->labelEx($model, 'Row Length:'); ?>
            <?php echo $form->textField($model, 'row_length'); ?>
            <?php echo $form->error($model, 'row_length'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'Column Length:'); ?>
            <?php echo $form->textField($model, 'column_length'); ?>
            <?php echo $form->error($model, 'column_length'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'Number of Rotations:'); ?>
            <?php echo $form->textField($model, 'rotation'); ?>
            <?php echo $form->error($model, 'rotation'); ?>
        </div>
        <div class="row buttons">
            <?php echo CHtml::submitButton('Generate'); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div>

<?php endif; ?>