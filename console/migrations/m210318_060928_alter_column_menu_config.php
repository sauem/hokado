<?php

use yii\db\Migration;

/**
 * Class m210318_060928_alter_column_menu_config
 */
class m210318_060928_alter_column_menu_config extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropIndex('name', 'menu_config');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210318_060928_alter_column_menu_config cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210318_060928_alter_column_menu_config cannot be reverted.\n";

        return false;
    }
    */
}
