<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "attendance".
 *
 * @property int $id
 * @property string $create_date
 * @property int $sudent_id
 * @property int $absent
 */
class Attendance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attendance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_date', 'sudent_id', 'absent'], 'required'],
            [['create_date'], 'safe'],
            [['sudent_id'], 'integer'],
            [['absent'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'create_date' => 'Create Date',
            'sudent_id' => 'Sudent ID',
            'absent' => 'Absent',
        ];
    }
}
