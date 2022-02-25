<?php

use yii\db\Migration;

/**
 * Class m220203_100503_add_created_at_to_user_table
 */
class m220203_100503_add_created_at_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user','created_at',$this->timestamp());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220203_100503_add_created_at_to_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220203_100503_add_created_at_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
