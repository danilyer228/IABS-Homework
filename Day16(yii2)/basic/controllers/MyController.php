<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Form; 

class MyController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionForm()
    {
    	$model = new Form();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        	$model->save();
            return $this->render('success');
        }
        return $this->render('form', ['model' => $model]);
    }

	function actionCall()
	{
		$model = new Form();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        	$model->saveNum();
            return $this->render('wait');
        }
        return $this->render('call', ['model' => $model]);
	}

}
