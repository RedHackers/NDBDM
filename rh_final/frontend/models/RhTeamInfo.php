<?php

/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the team info model of frontend web.
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rh_team_info".
 *
 * @property string $team_name
 * @property integer $team_num
 * @property string $team_dir
 * @property string $team_motto
 * @property string $team_pic
 * @property string $team_intro
 */
class RhTeamInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rh_team_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_name', 'team_dir', 'team_motto', 'team_pic', 'team_intro'], 'required'],
            [['team_num'], 'integer'],
            [['team_intro'], 'string'],
            [['team_name', 'team_dir', 'team_motto', 'team_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'team_name' => '团队名称',
            'team_num' => '团队成员',
            'team_dir' => '团队方向',
            'team_motto' => '团队格言',
            'team_pic' => '团队图片',
            'team_intro' => '团队介绍',
        ];
    }
}
