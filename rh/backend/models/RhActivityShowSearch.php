<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RhActivityShow;

/**
 * RhActivityShowSearch represents the model behind the search form about `frontend\models\RhActivityShow`.
 */
class RhActivityShowSearch extends RhActivityShow
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activity_show_id'], 'integer'],
            [['activity_show_name', 'activity_show_detail', 'activity_show_pic'], 'safe'],
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
        $query = RhActivityShow::find();

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
            'activity_show_id' => $this->activity_show_id,
        ]);

        $query->andFilterWhere(['like', 'activity_show_name', $this->activity_show_name])
            ->andFilterWhere(['like', 'activity_show_detail', $this->activity_show_detail])
            ->andFilterWhere(['like', 'activity_show_pic', $this->activity_show_pic]);

        return $dataProvider;
    }
}
