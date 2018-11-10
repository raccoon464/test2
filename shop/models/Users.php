<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $login
 * @property string $mail
 * @property string $password
 */
class Users extends \yii\db\ActiveRecord
{

  public $password2;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'mail', 'password', 'password'], 'required'],
            [['login', 'mail', 'password', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'mail' => 'Mail',
            'password' => 'Password',
            'password2' => 'Password2'
        ];
    }
}
