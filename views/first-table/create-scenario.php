<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FirstTable */

$this->title = 'Create First Table';
$this->params['breadcrumbs'][] = ['label' => 'First Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="first-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
