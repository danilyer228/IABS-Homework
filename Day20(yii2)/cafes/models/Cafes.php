<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cafes".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $address
 * @property int $likes
 * @property int $dislikes
 */
class Cafes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cafes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'address', 'likes', 'dislikes'], 'required'],
            [['description'], 'string'],
            [['likes', 'dislikes'], 'integer'],
            [['name'], 'string', 'max' => 15],
            [['address'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'address' => 'Address',
            'likes' => 'Likes',
            'dislikes' => 'Dislikes',
        ];
    }
}
