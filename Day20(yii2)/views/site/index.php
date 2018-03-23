<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CafesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cafes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cafes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    

    <p>
        <?= Html::a('Create Cafes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
         'itemView' => function ($model, $key, $index, $widget) {
           return Html::encode($model->name). " " . Html::a("like", ['like', 'id' => $model->id]) . " ($model->likes)  " . Html::a("dislike", ['dislike', 'id' => $model->id]) . " ($model->dislikes)";

        }
    ]) ?>
</div>
