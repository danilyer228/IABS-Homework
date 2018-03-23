<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cafes */

$this->title = 'Create Cafes';
$this->params['breadcrumbs'][] = ['label' => 'Cafes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cafes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
