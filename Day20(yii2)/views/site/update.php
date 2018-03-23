<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cafes */

$this->title = 'Update Cafes: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Cafes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cafes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
