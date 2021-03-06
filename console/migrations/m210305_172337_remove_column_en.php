<?php

use yii\db\Migration;

/**
 * Class m210305_172337_remove_column_en
 */
class m210305_172337_remove_column_en extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('products', 'language', $this->string(50)->defaultValue('vi'));
        $this->addColumn('archives', 'language', $this->string(50)->defaultValue('vi'));
        $this->addColumn('archives', 'type', $this->string(255)->defaultValue('product'));
        $this->addColumn('banners', 'language', $this->string(50)->defaultValue('vi'));
        $this->addColumn('articles', 'language', $this->string(50)->defaultValue('vi'));

        //remove column en product
        $this->dropColumn('products', 'en_name');
        $this->dropColumn('products', 'en_slug');
        $this->dropColumn('products', 'en_content');
        $this->dropColumn('products', 'en_excerpt');
        //archive
        $this->dropColumn('archives', 'en_name');
        $this->dropColumn('archives', 'en_slug');
        $this->dropColumn('archives', 'en_description');
        //article
        $this->dropColumn('articles', 'en_name');
        $this->dropColumn('articles', 'en_slug');
        $this->dropColumn('articles', 'en_content');
        $this->dropColumn('articles', 'en_excerpt');
        //banner
        $this->dropColumn('banners', 'en_name');
        $this->dropColumn('banners', 'en_description');
        $this->dropColumn('banners', 'en_href');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210305_172337_remove_column_en cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210305_172337_remove_column_en cannot be reverted.\n";

        return false;
    }
    */
}
