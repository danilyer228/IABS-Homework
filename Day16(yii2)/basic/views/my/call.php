<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Позвони мне';
?>


<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'num') ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
