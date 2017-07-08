<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rh_activity_info".
 *
 * @property string $activity_name
 * @property string $activity_detail
 * @property string $activity_pic
 * @property string $activity_id
 *
 * @property RhActivityAttend[] $rhActivityAttends
 */
class RhActivityInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rh_activity_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activity_name', 'activity_detail', 'activity_pic', 'activity_id'], 'required'],
            [['activity_detail'], 'string'],
            [['activity_id'], 'integer'],
            [['activity_name'], 'string', 'max' => 20],
            [['activity_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'activity_name' => '活动名称',
            'activity_detail' => '活动内容',
            'activity_pic' => '活动图片',
            'activity_id' => '活动id',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRhActivityAttends()
    {
        return $this->hasMany(RhActivityAttend::className(), ['activity_id' => 'activity_id']);
    }
}
