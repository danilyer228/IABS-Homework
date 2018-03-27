<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Breed */

$this->title = 'Create Breed';
$this->params['breadcrumbs'][] = ['label' => 'Breeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
