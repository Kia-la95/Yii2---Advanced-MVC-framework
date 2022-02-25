<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $dob
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'dob','title'], 'required'],
            [['firstname', 'lastname', 'dob','title'], 'string', 'max' => 255],
        ];
    }

    public function behaviors()
    {
        return[

        TimestampBehavior::class,

        ];

    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'User Title',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'dob' => 'Dob',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
