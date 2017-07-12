<?php
/**
 * Team: RedHackers,NKU
 * Coding by Rui Zhou 1511388, 20170704
 * This is the member live search model of backend web.
 */
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RhMemberLive;

/**
 * RhMemberLiveSearch represents the model behind the search form about `frontend\models\RhMemberLive`.
 */
class RhMemberLiveSearch extends RhMemberLive
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_name', 'live_pic'], 'safe'],
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
        $query = RhMemberLive::find();

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
            ->andFilterWhere(['like', 'live_pic', $this->live_pic]);

        return $dataProvider;
    }
}
