<?php
<<<<<<< HEAD
/**
 * Team: red hackers
 * Coding by cuilixiao 1511366, 20170708
 * This is the note show of backend web. 
 */
=======

>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1
namespace backend\models;

use Yii;

/**
 * This is the model class for table "rh_note_show".
 *
 * @property string $note_id
 * @property string $note_show_id
 *
 * @property RhNoteRecord $note
 */
class RhNoteShow extends \backend\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rh_note_show';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['note_id'], 'required'],
            [['note_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'note_id' => '留言id',
            'note_show_id' => '留言展示序号',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNote()
    {
        return $this->hasOne(RhNoteRecord::className(), ['note_id' => 'note_id']);
    }
}
