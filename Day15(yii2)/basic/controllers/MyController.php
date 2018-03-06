<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class MyController extends Controller
{
    public function actionHello($name = "Romusik") 
    {
        echo "Hello, {$name}.";
    }

}
