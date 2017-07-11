<?php
<<<<<<< HEAD
/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the main layout of frontend web.
 */
=======

>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RhTeamServer;

/**
 * RhTeamServerSearch represents the model behind the search form about `frontend\models\RhTeamServer`.
 */
class RhTeamServerSearch extends RhTeamServer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['server_name'], 'safe'],
            [['server_member_num'], 'integer'],
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
        $query = RhTeamServer::find();

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
            'server_member_num' => $this->server_member_num,
        ]);

        $query->andFilterWhere(['like', 'server_name', $this->server_name]);

        return $dataProvider;
    }
}
