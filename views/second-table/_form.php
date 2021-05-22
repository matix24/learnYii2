<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SecondTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="second-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_table_id')->textInput() ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
