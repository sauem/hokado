<?php

use yii\db\Migration;

/**
 * Class m210319_062612_testimonial_table
 */
class m210319_062612_testimonial_table extends Migration
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
        $this->createTable('{{%testimonials}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'message' => $this->text(),
            'media_id' => $this->integer(),
            'position' => $this->string(100)->null(),
            'company' => $this->string(100)->null(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210319_062612_testimonial_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210319_062612_testimonial_table cannot be reverted.\n";

        return false;
    }
    */
}
