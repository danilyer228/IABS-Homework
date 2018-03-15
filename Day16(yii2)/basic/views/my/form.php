<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Мой тайтл';
?>


<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
