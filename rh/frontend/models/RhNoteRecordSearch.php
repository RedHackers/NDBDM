<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Rh;

/**
 * RhNoteRecordSearch represents the model behind the search form about `frontend\models\RhNoteRecord`.
 */
class RhNoteRecordSearch extends RhNoteRecord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'note_email', 'note_content'], 'safe'],
            [['note_id'], 'integer'],
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
        $query = RhNoteRecord::find();

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
            'note_id' => $this->note_id,
        ]);

        $query->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'note_email', $this->note_email])
            ->andFilterWhere(['like', 'note_content', $this->note_content]);

        return $dataProvider;
    }
}
