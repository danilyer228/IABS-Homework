<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionEdit()
    {
        return $this->render('edit');
    }

    public function actionDelete()
    {
        return $this->render('delete');
    } 
}  