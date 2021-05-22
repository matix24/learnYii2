<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "second_table".
 *
 * @property int $id
 * @property int $first_table_id
 * @property string|null $text
 *
 * @property FirstTable $firstTable
 */
class SecondTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'second_table';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_table_id'], 'required'],
            [['first_table_id'], 'integer'],
            [['text'], 'string', 'max' => 255],
            [['first_table_id'], 'exist', 'skipOnError' => true, 'targetClass' => FirstTable::class, 'targetAttribute' => ['first_table_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_table_id' => 'First Table',
            'text' => 'Text',
        ];
    }

    /**
     * Gets query for [[FirstTable]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFirstTable()
    {
        return $this->hasOne(FirstTable::class, ['id' => 'first_table_id']);
    }
}
