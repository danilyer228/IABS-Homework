<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "breed".
 *
 * @property int $id
 * @property string $breed
 * @property string $description
 * @property string $img
 */
class Breed extends \yii\db\ActiveRecord
{

    public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'breed';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['breed', 'description', 'img'], 'string', 'max' => 255],
             [['imageFile'],
                 'file',
                 'skipOnEmpty' => true​,
                 'extensions' => 'png, jpg'
                ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'breed' => 'Breed',
            'description' => 'Description',
            'img' => 'Img',
        ];
    }

    public function upload() {
        if($this->validate()) {
        $filePath = 'uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;
        $this->imageFile->saveAs($filePath);
         $this->imageFile = null;
         $this->img = $filePath;
         return true;
         } else {
            return false;
        }
    }
    
}