<?php
/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the main layout of frontend web.
 */
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RhActivityAttend;

/**
 * RhActivityAttendSearch represents the model behind the search form about `frontend\models\RhActivityAttend`.
 */
class RhActivityAttendSearch extends RhActivityAttend
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activity_id'], 'integer'],
            [['member_name', 'activity_sort'], 'safe'],
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
        $query = RhActivityAttend::find();

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

        $query->andFilterWhere(['like', 'member_name', $this->member_name])
            ->andFilterWhere(['like', 'activity_sort', $this->activity_sort]);

        return $dataProvider;
    }
}
