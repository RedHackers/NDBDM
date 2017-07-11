<?php
/**
 * Team: RedHackers,NKU
 * Coding by Rui Zhou 1511388, 20170704
 * This is the member display of frontend web.
 */
namespace backend\models;

use Yii;

/**
 * This is the model class for table "rh_member_live".
 *
 * @property string $member_name
 * @property string $live_pic_id
 * @property string $live_pic
 *
 * @property RhMemberInfo[] $rhMemberInfos
 */
class RhMemberLive extends \backend\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rh_member_live';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_name', 'live_pic_id', 'live_pic'], 'required'],
            [['live_pic_id'], 'integer'],
            [['member_name'], 'string', 'max' => 15],
            [['live_pic'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'member_name' => '成员名称',
            'live_pic_id' => '成员图片id',
            'live_pic' => '成员图片',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRhMemberInfos()
    {
        return $this->hasMany(RhMemberInfo::className(), ['live_pic_id' => 'live_pic_id']);
    }
}
