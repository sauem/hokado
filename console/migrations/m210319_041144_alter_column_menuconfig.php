<?php

use yii\db\Migration;

/**
 * Class m210319_041144_alter_column_menuconfig
 */
class m210319_041144_alter_column_menuconfig extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('menu_config', 'items', $this->text()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210319_041144_alter_column_menuconfig cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210319_041144_alter_column_menuconfig cannot be reverted.\n";

        return false;
    }
    */
}
