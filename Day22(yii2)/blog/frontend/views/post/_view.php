<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Post */
?>
<div class="panel">
    <div class="btn-group pull-right" role="group">
    <?php if(Yii::$app->user->can('updatePost')) : ?>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span>', 
            ['/post/update', 'id' => $model->id], 
            [
                'class' => 'btn btn-warning btn-sm'
            ]) ?>
        <?= Html::a('<span class="glyphicon glyphicon-trash"></span>', 
            ['delete', 'id' => $model->id], 
            [
                'class' => 'btn btn-danger btn-sm',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
    <?php endif; ?>        
    </div>
    <div class="panel-heading">
        <?php if ($showFullContent) : ?>
            <h1><?= Html::encode($model->title) ?></h1>
        <?php else : ?>
            <h4><?= Html::a(Html::encode($model->title), ['/post/view', 'id' => $model->id]) ?></h4>
        <?php endif; ?>    
        <div>
            <span class="glyphicon glyphicon-calendar"></span>
            <?= Yii::$app->formatter->asDatetime($model->created_at) ?>
            <span class="glyphicon glyphicon-user"></span>
            <?= $model->createdBy->username ?>                 
        </div>
    </div>
    <?= ($model->lead_photo) ? Html::img(Url::to(['/']) . $model->lead_photo, 
                ['class' => 'img-responsive center-block']
            ) : ''
    ?>
    <div class="panel-body">
        <?= !empty($model->lead_text) ? Yii::$app->formatter->asHtml($model->lead_text) : '' ?>
        <?= $showFullContent ? Yii::$app->formatter->asHtml($model->content) : '' ?>
    </div>
    <?php if (!$showFullContent) :?>
        <div class="panel-footer">
            <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> Read full post', ['/post/view', 'id' => $model->id], [
                'class' => 'btn btn-primary btn-block'
            ]) ?>
        </div>        
    <?php endif; ?>    
</div>
