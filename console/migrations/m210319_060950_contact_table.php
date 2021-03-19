<?php

use yii\db\Migration;

/**
 * Class m210319_060950_contact_table
 */
class m210319_060950_contact_table extends Migration
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
        $this->createTable('{{%contact}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'email' => $this->string(150)->null(),
            'phone' => $this->string(50)->null(),
            'message' => $this->text()->null(),
            'type' => $this->string(50)->defaultValue('brief'),
            'export_country' => $this->string(50)->null(),
            'time_exp' => $this->integer()->null(),
            'contact_pre' => $this->string(100)->null(),
            'status' => $this->string(50)->defaultValue('new'),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210319_060950_contact_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210319_060950_contact_table cannot be reverted.\n";

        return false;
    }
    */
}
