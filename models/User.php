<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $password
 * @property string $date_registration
 * @property string $date_update
 * @property integer $user_role
 *
 * @property Message[] $messages
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'patronymic', 'password', 'date_registration', 'date_update'], 'required'],
            [['date_registration', 'date_update'], 'safe'],
            [['user_role'], 'integer'],
            [['name', 'surname', 'patronymic'], 'string', 'max' => 45],
            [['password'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'password' => 'Пароль',
            'date_registration' => 'Дата регистрации',
            'date_update' => 'Дата редактирования',
            'user_role' => 'Статус',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Message::className(), ['rel_user_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }
}
