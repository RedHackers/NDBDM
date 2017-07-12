<?php

/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the activity attend mmodel of frontend web.
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rh_activity_attend".
 *
 * @property string $activity_id
 * @property string $member_name
 * @property string $activity_sort
 *
 * @property RhMemberInfo $memberName
 * @property RhActivityInfo $activity
 */
class RhActivityAttend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rh_activity_attend';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activity_id', 'member_name', 'activity_sort'], 'required'],
            [['activity_id'], 'integer'],
            [['member_name'], 'string', 'max' => 15],
            [['activity_sort'], 'string', 'max' => 20],
            [['member_name'], 'exist', 'skipOnError' => true, 'targetClass' => RhMemberInfo::className(), 'targetAttribute' => ['member_name' => 'member_name']],
            [['activity_id'], 'exist', 'skipOnError' => true, 'targetClass' => RhActivityInfo::className(), 'targetAttribute' => ['activity_id' => 'activity_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'activity_id' => '活动id',
            'member_name' => '成员名称',
            'activity_sort' => '活动类型',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberName()
    {
        return $this->hasOne(RhMemberInfo::className(), ['member_name' => 'member_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivity()
    {
        return $this->hasOne(RhActivityInfo::className(), ['activity_id' => 'activity_id']);
    }
}
