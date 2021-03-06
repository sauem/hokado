<?php

use yii\db\Migration;

/**
 * Class m210304_144736_add_column_en
 */
class m210304_144736_add_column_en extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        //banners
        $this->createTable('{{%banners}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'en_name' => $this->string(100),
            'description' => $this->string(255)->null(),
            'en_description' => $this->string(255)->null(),
            'href' => $this->text()->null(),
            'en_href' => $this->text()->null(),
            'active' => $this->string(50)->defaultValue('active'),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);
        //article
        $this->addColumn('articles', 'en_name', $this->string(255));
        $this->addColumn('articles', 'en_slug', $this->string(255));
        $this->addColumn('articles', 'en_content', $this->text()->null());
        $this->addColumn('articles', 'en_excerpt', $this->string(255)->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210304_144736_add_column_en cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210304_144736_add_column_en cannot be reverted.\n";

        return false;
    }
    */
}
