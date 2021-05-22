<?php

use yii\db\Migration;

/**
 * Class m210518_192904_learn_query
 */
class m210518_192904_learn_query extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('customer', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string(),
            'created_at' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }
}
