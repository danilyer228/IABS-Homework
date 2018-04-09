<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Category;
/* @var $this yii\web\View */
/* @var $model common\models\PostSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="post-search">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
        <div class="col-md-5">
            <?= $form->field($model, 'title')
                ->textInput(['placeholder' => 'Search by title'])
                ->label(false) ?>
        </div>
        <div class="col-md-5">
            <?= $form->field($model, 'category_id')
                ->dropDownList($model->categoryList(), [
                    'prompt' => 'Select Category'
                ])->label(false) ?>
        </div>
        <div class="col-md-2">
            <div class="form-group btn-group btn-group-justified">
                <div class="btn-group">
                    <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
                </div>
                <div class="btn-group">
                    <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
