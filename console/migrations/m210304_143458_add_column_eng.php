<?php

use yii\db\Migration;

/**
 * Class m210304_143458_add_column_eng
 */
class m210304_143458_add_column_eng extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('archives', 'parent_id', $this->integer()->null());
        $this->addColumn('archives', 'en_name', $this->string(255));
        $this->addColumn('archives', 'en_slug', $this->string(255));
        $this->addColumn('archives', 'en_description', $this->string(255));
        //product
        $this->addColumn('products', 'en_name', $this->string(255));
        $this->addColumn('products', 'en_slug', $this->string(255));
        $this->addColumn('products', 'en_content', $this->text()->null());
        $this->addColumn('products', 'en_excerpt', $this->string(255)->null());

        $this->addColumn('seo_meta', 'language', $this->string(25)->defaultValue('vi'));


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210304_143458_add_column_eng cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210304_143458_add_column_eng cannot be reverted.\n";

        return false;
    }
    */
}
