<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asd".
 *
 * @property int $id
 * @property string $name
 * @property string $lname
 */
class Asd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'lname'], 'required'],
            [['name', 'lname'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'lname' => 'Lname',
        ];
    }
}
