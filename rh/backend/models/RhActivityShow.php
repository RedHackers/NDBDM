<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rh_activity_show".
 *
 * @property integer $activity_show_id
 * @property string $activity_show_name
 * @property string $activity_show_detail
 * @property string $activity_show_pic
 */
class RhActivityShow extends \backend\base\BaseActiveRecord
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
            [['activity_show_name', 'activity_show_detail', 'activity_show_pic'], 'required'],
            [['activity_show_detail'], 'string'],
            [['activity_show_name', 'activity_show_pic'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'activity_show_id' => 'Activity Show ID',
            'activity_show_name' => '展示活动名称',
            'activity_show_detail' => '展示活动介绍',
            'activity_show_pic' => '展示活动图片',
        ];
    }
}
