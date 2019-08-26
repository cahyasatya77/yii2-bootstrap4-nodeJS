<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property int $id
 * @property string $users
 * @property string $message
 * @property string $tanggal
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['users', 'message'], 'required'],
            [['message'], 'string'],
            [['tanggal'], 'safe'],
            [['users'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'users' => 'Users',
            'message' => 'Message',
            'tanggal' => 'Tanggal',
        ];
    }
}
