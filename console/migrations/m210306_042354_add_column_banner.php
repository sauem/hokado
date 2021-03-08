<?php

use yii\db\Migration;

/**
 * Class m210306_042354_add_column_banner
 */
class m210306_042354_add_column_banner extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('banners', 'media_id', $this->integer());
        $this->addColumn('banners', 'page_show', $this->string(255));
        $this->addColumn('banners', 'type', $this->string(50)->defaultValue('image'));
        $this->addColumn('banners', 'position', $this->string(50)->defaultValue('slider_home'));
        $this->addColumn('banners', 'device', $this->string(50)->defaultValue('desktop'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210306_042354_add_column_banner cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210306_042354_add_column_banner cannot be reverted.\n";

        return false;
    }
    */
}
