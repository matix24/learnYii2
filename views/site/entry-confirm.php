<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'EntryForm-Confirm';
$this->params['breadcrumbs'][] = $this->title;
?>

<p> Wpisałeś następujące informacje:</p>

<ul>
    <li>
        <label>Nazwa</label>:
        <?= Html::encode($model->name) ?>
    </li>
    <li>
        <label>Email</label>:
        <?= Html::encode($model->email) ?>
    </li>
</ul>
