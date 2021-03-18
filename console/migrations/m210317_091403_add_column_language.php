<?php

use yii\db\Migration;

/**
 * Class m210317_091403_add_column_language
 */
class m210317_091403_add_column_language extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('menu_config', 'language', $this->string(20)->defaultValue('vi'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210317_091403_add_column_language cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210317_091403_add_column_language cannot be reverted.\n";

        return false;
    }
    */
}
