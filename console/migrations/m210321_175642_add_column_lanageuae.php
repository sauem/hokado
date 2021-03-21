<?php

use yii\db\Migration;

/**
 * Class m210321_175642_add_column_lanageuae
 */
class m210321_175642_add_column_lanageuae extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('testimonials', 'language', $this->string(50)->defaultValue('vi'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210321_175642_add_column_lanageuae cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210321_175642_add_column_lanageuae cannot be reverted.\n";

        return false;
    }
    */
}
