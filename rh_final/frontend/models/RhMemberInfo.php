<?php

/**
 * Team: RedHackers,NKU
 * Coding by Rui Zhou 1511388, 20170704
 * This is the member info mmodel of frontend web.
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rh_member_info".
 *
 * @property string $member_name
 * @property string $member_major
 * @property string $live_pic_id
 * @property string $member_degree
 * @property string $member_duty
 * @property string $member_interest
 * @property string $member_email
 * @property string $member_live
 *
 * @property RhActivityAttend[] $rhActivityAttends
 * @property RhMemberLive $livePic
 */
class RhMemberInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rh_member_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_name', 'member_major', 'live_pic_id', 'member_degree', 'member_duty', 'member_interest', 'member_email', 'member_live'], 'required'],
            [['live_pic_id'], 'integer'],
            [['member_live'], 'string'],
            [['member_name'], 'string', 'max' => 15],
            [['member_major', 'member_degree', 'member_duty', 'member_interest'], 'string', 'max' => 20],
            [['member_email'], 'string', 'max' => 40],
            [['live_pic_id'], 'exist', 'skipOnError' => true, 'targetClass' => RhMemberLive::className(), 'targetAttribute' => ['live_pic_id' => 'live_pic_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'member_name' => '成员名称',
            'member_major' => '成员专业',
            'live_pic_id' => '成员图片id',
            'member_degree' => '成员学历',
            'member_duty' => '成员职务',
            'member_interest' => '成员兴趣方向',
            'member_email' => '成员电子邮箱',
            'member_live' => '成员经历',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRhActivityAttends()
    {
        return $this->hasMany(RhActivityAttend::className(), ['member_name' => 'member_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLivePic()
    {
        return $this->hasOne(RhMemberLive::className(), ['live_pic_id' => 'live_pic_id']);
    }
}
