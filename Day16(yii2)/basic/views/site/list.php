<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Действия';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <ul>
    	<li><a href="?r=user%2Fcreate">Создать</a></li>
    	<li><a href="?r=user%2Fdelete">Удалить</a></li>
		<li><a href="gg">Редактировать</a></li>
    </ul>

</div>
