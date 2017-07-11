<?php
/**
 * Team: red hackers
 * Coding by cuilixiao 1511366, 20170708
 * This is the note show of backend web. 
 */
namespace backend\models;

use Yii;

/**
 * This is the model class for table "rh_note_record".
 *
 * @property string $user_name
 * @property string $note_email
 * @property string $note_content
 * @property string $note_id
 *
 * @property RhNoteShow[] $rhNoteShows
 */
class RhNoteRecord extends \backend\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rh_note_record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'note_email', 'note_content'], 'required'],
            [['note_content'], 'string'],
            [['user_name'], 'string', 'max' => 15],
            [['note_email'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_name' => '用户名称',
            'note_email' => '留言邮箱',
            'note_content' => '留言内容',
            'note_id' => '留言id',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRhNoteShows()
    {
        return $this->hasMany(RhNoteShow::className(), ['note_id' => 'note_id']);
    }
}
