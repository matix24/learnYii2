<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SecondTable */

$this->title = 'Update Second Table: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Second Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="second-table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
