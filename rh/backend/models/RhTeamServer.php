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

/**
 * This is the model class for table "rh_team_server".
 *
 * @property string $server_name
 * @property integer $server_member_num
 */
class RhTeamServer extends \backend\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rh_team_server';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['server_name'], 'required'],
            [['server_member_num'], 'integer'],
            [['server_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'server_name' => '服务名称',
            'server_member_num' => '服务人数',
        ];
    }
}
