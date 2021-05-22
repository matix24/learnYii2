<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "first_table".
 *
 * @property int $id
 * @property string $name
 * @property string|null $notice
 */
class FirstTable extends \yii\db\ActiveRecord
{
    const SCENARIO_DEFAULT = 'default';
    const SCENARIO_FIRST = 'first';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'first_table';
    }

    /**
     * @inheritDoc
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_DEFAULT] = ['name', 'notice'];
        $scenarios[self::SCENARIO_FIRST] = ['name'];
        return $scenarios;
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required', 'message' => 'dfsdfsdfsdf', 'on' => self::SCENARIO_DEFAULT],
            [['name'], 'required', 'message' => 'dfsdfsdfsdf', 'on' => self::SCENARIO_FIRST],
            [['name', 'notice'], 'string', 'message' => 'Max 255 znaków', 'max' => 255, 'on' => self::SCENARIO_DEFAULT],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'notice' => 'Notice',
        ];
    }
}
