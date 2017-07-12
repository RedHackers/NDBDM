<?php
/**
 * Team: red hackers
 * Coding by Lixiao Cui 1511366, 20170704
 * This is the note show of backend web. 
 */
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RhNoteShow;

/**
 * RhNoteShowSearch represents the model behind the search form about `frontend\models\RhNoteShow`.
 */
class RhNoteShowSearch extends RhNoteShow
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['note_id', 'note_show_id'], 'integer'],
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
        $query = RhNoteShow::find();

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
            'note_id' => $this->note_id,
            'note_show_id' => $this->note_show_id,
        ]);

        return $dataProvider;
    }
}
