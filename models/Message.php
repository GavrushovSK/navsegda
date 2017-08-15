<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property integer $id
 * @property string $m_title
 * @property string $m_text
 * @property string $m_date_registration
 * @property string $m_date_upgrate
 * @property integer $m_status
 * @property integer $rel_user_id
 *
 * @property User $relUser
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['m_title', 'm_text', 'm_date_registration', 'm_date_upgrate', 'rel_user_id'], 'required'],
            [['m_text'], 'string'],
            [['m_date_registration', 'm_date_upgrate'], 'safe'],
            [['m_status', 'rel_user_id'], 'integer'],
            [['m_title'], 'string', 'max' => 45],
            [['rel_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['rel_user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'm_title' => 'Заголовок ',
            'm_text' => 'Сообщение',
            'm_date_registration' => 'Дата создания',
            'm_date_upgrate' => 'Дата редакктирования',
            'm_status' => 'Статус',
            'rel_user_id' => 'Пользователь',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelUser()
    {
        return $this->hasOne(User::className(), ['id' => 'rel_user_id']);
    }

    /**
     * @inheritdoc
     * @return MessageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MessageQuery(get_called_class());
    }
}
