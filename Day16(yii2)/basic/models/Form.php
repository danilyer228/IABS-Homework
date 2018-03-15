<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Form extends Model {
    public $email;
    public $name;
public $num;

    public function rules() {
        return [
            [['name', 'num'], 'required'],
            ['email', 'email'],
            ['name', 'string', 'length' => [2, 15]],
['num', 'string', 'length' => [10, 13]],
        ];
    }
    public function save(){
    	file_put_contents(
    		Yii::getAlias("@webroot") . "/files/emails.txt", 
    		$this->email . ",". $this->name . "\n",
    		FILE_APPEND
    	);    	
    }
public function saveNum(){
    	file_put_contents(
    		Yii::getAlias("@webroot") . "/files/nums.txt", 
    		$this->num . ",". $this->name . "\n",
    		FILE_APPEND
    	);    	
    }
}
