<?php

use yii\db\Migration;

/**
 * Class m210303_130253_add_column_media
 */
class m210303_130253_add_column_media extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('medias', 'obj_id', $this->integer()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210303_130253_add_column_media cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210303_130253_add_column_media cannot be reverted.\n";

        return false;
    }
    */
}
