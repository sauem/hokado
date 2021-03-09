<?php

use yii\db\Migration;

/**
 * Class m210309_025802_remove_table_unuse
 */
class m210309_025802_remove_table_unuse extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('medias_ref');
        $this->addColumn('articles', 'archive_id', $this->integer());
        $this->addColumn('articles', 'media_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210309_025802_remove_table_unuse cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210309_025802_remove_table_unuse cannot be reverted.\n";

        return false;
    }
    */
}
