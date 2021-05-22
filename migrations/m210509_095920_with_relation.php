<?php

use yii\db\Migration;

/**
 * Class m210509_095920_with_relation
 */
class m210509_095920_with_relation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('second_table', [
            'id' => $this->primaryKey()->notNull(),
            'first_table_id' => $this->integer()->notNull(),
            'text' => $this->string(255)->null()
        ]);

        $this->addForeignKey(
            'fk_first_table_id',
            'second_table',
            'first_table_id',
            'first_table',
            'id'
        );

        $this->createIndex('inx_second_table_id', 'second_table', 'first_table_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210509_095920_with_relation cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210509_095920_with_relation cannot be reverted.\n";

        return false;
    }
    */
}
