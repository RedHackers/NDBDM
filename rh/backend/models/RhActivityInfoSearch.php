<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RhActivityInfo;

/**
 * RhActivityInfoSearch represents the model behind the search form about `frontend\models\RhActivityInfo`.
 */
class RhActivityInfoSearch extends RhActivityInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activity_name', 'activity_detail', 'activity_pic'], 'safe'],
            [['activity_id'], 'integer'],
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
        $query = RhActivityInfo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'activity_id' => $this->activity_id,
        ]);

        $query->andFilterWhere(['like', 'activity_name', $this->activity_name])
            ->andFilterWhere(['like', 'activity_detail', $this->activity_detail])
            ->andFilterWhere(['like', 'activity_pic', $this->activity_pic]);

        return $dataProvider;
    }
}
