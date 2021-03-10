<?php

use yii\db\Migration;

/**
 * Class m210310_023031_add_column_variants
 */
class m210310_023031_add_column_variants extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('attributes', 'note', $this->string()->null());
        $this->renameColumn('attributes', 'unit', 'type');
        $this->addColumn('attributes_variants', 'slug', $this->string()->unique());
        $this->addColumn('attributes_variants', 'note', $this->string()->null());
        $this->addColumn('attributes_variants', 'media_id', $this->integer()->null());
        $this->addColumn('attributes_variants', 'color', $this->string()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210310_023031_add_column_variants cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210310_023031_add_column_variants cannot be reverted.\n";

        return false;
    }
    */
}
