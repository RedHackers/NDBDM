<?php
/**
 * Team: RedHackers,NKU
 * Coding by Jingyu Jia 1511372, 20170704
 * This is the activity display of frontend web.
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rh_activity_show".
 *
 * @property integer $activity_show_id
 * @property integer $activity_id
 */
class RhActivityShow extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rh_activity_show';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activity_id'], 'required'],
            [['activity_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'activity_show_id' => 'Activity Show ID',
            'activity_id' => 'Activity ID',
        ];
    }
}
