<?php

use yii\db\Migration;

/**
 * Class m210312_071445_add_table_menu_front
 */
class m210312_071445_add_table_menu_front extends Migration
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
        $this->createTable('{{%menu_config}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->unique(),
            'items' => $this->string(255)->defaultValue('header'),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);
        $this->insert('{{%menu_config}}', [
            'name' => 'header',
            'items' => '',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        $this->insert('{{%menu_config}}', [
            'name' => 'footer',
            'items' => '',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210312_071445_add_table_menu_front cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210312_071445_add_table_menu_front cannot be reverted.\n";

        return false;
    }
    */
}
