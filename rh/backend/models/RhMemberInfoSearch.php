<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RhMemberInfo;

/**
 * RhMemberInfoSearch represents the model behind the search form about `frontend\models\RhMemberInfo`.
 */
class RhMemberInfoSearch extends RhMemberInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_name', 'member_major', 'member_degree', 'member_duty', 'member_interest', 'member_email', 'member_live'], 'safe'],
            [['live_pic_id'], 'integer'],
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
        $query = RhMemberInfo::find();

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
            'live_pic_id' => $this->live_pic_id,
        ]);

        $query->andFilterWhere(['like', 'member_name', $this->member_name])
            ->andFilterWhere(['like', 'member_major', $this->member_major])
            ->andFilterWhere(['like', 'member_degree', $this->member_degree])
            ->andFilterWhere(['like', 'member_duty', $this->member_duty])
            ->andFilterWhere(['like', 'member_interest', $this->member_interest])
            ->andFilterWhere(['like', 'member_email', $this->member_email])
            ->andFilterWhere(['like', 'member_live', $this->member_live]);

        return $dataProvider;
    }
}
