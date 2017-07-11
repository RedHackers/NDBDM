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
use backend\models\RhTeamInfo;

/**
 * RhTeamInfoSearch represents the model behind the search form about `frontend\models\RhTeamInfo`.
 */
class RhTeamInfoSearch extends RhTeamInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_name', 'team_dir', 'team_motto', 'team_pic', 'team_intro'], 'safe'],
            [['team_num'], 'integer'],
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
        $query = RhTeamInfo::find();

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
            'team_num' => $this->team_num,
        ]);

        $query->andFilterWhere(['like', 'team_name', $this->team_name])
            ->andFilterWhere(['like', 'team_dir', $this->team_dir])
            ->andFilterWhere(['like', 'team_motto', $this->team_motto])
            ->andFilterWhere(['like', 'team_pic', $this->team_pic])
            ->andFilterWhere(['like', 'team_intro', $this->team_intro]);

        return $dataProvider;
    }
}
