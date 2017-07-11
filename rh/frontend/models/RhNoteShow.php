<?php
/**
 * Team: RedHackers,NKU
 * Coding by Lixiao Cui 1511366, 20170704
 * This is the member display of frontend web.
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rh_note_show".
 *
 * @property string $note_id
 * @property string $note_show_id
 *
 * @property RhNoteRecord $note
 */
class RhNoteShow extends \yii\db\ActiveRecord
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
            [['note_id'], 'integer'],
            [['note_id'], 'exist', 'skipOnError' => true, 'targetClass' => RhNoteRecord::className(), 'targetAttribute' => ['note_id' => 'note_id']],
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
