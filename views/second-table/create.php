<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SecondTable */
/* @var $items array */

$this->title = 'Create Second Table';
$this->params['breadcrumbs'][] = ['label' => 'Second Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="second-table-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php print_r($items); ?>
    <?php $form = ActiveForm::begin(); ?>
        <?= Html::activeDropDownList($model, 'first_table_id', $items) ?>

            <?= $form->field($model, 'text'); ?>

        <?= Html::submitButton() ?>
    <?php ActiveForm::end(); ?>


    <?php // $this->render('_form', ['model' => $model]) ?>

</div>
