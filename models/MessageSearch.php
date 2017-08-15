<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Message;

/**
 * MessageSearch represents the model behind the search form about `app\models\Message`.
 */
class MessageSearch extends Message
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'm_status', 'rel_user_id'], 'integer'],
            [['m_title', 'm_text', 'm_date_registration', 'm_date_upgrate'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Message::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'm_date_registration' => $this->m_date_registration,
            'm_date_upgrate' => $this->m_date_upgrate,
            'm_status' => $this->m_status,
            'rel_user_id' => $this->rel_user_id,
        ]);

        $query->andFilterWhere(['like', 'm_title', $this->m_title])
            ->andFilterWhere(['like', 'm_text', $this->m_text]);

        return $dataProvider;
    }
}
