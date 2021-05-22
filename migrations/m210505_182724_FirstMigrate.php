<?php

use yii\db\Migration;

/**
 * Class m210505_182724_FirstMigrate
 */
class m210505_182724_FirstMigrate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('first_table', [
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string(255)->notNull(),
            'notice' => $this->string(255)->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('first_table');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210505_182724_FirstMigrate cannot be reverted.\n";

        return false;
    }
    */
}
