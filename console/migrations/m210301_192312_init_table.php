<?php

use yii\db\Migration;

/**
 * Class m210301_192312_init_table
 */
class m210301_192312_init_table extends Migration
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
        $this->createTable('{{%medias}}', [
            'id' => $this->primaryKey(),
            'path' => $this->text(),
            'type' => $this->string(50)->null(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);
        $this->createTable('{{%archives}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'slug' => $this->string(255)->unique(),
            'active' => $this->tinyInteger()->defaultValue(0),
            'description' => $this->text()->null(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'slug' => $this->string(255)->unique(),
            'status' => $this->string(50)->defaultValue('draft'),
            'content' => $this->text()->null(),
            'excerpt' => $this->string(255)->null(),
            'attributes' => $this->text(),
            'default_price' => $this->double(15.2)->defaultValue(0),
            'default_sale_type' => $this->double(15.2)->defaultValue(0),
            'default_sale_price' => $this->double(15.2)->defaultValue(0),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);

        $this->createTable('{{%attributes}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'slug' => $this->string(255)->unique(),
            'unit' => $this->string(255)->null(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);
        $this->createTable('{{%attributes_variants}}', [
            'id' => $this->primaryKey(),
            'attribute_id' => $this->integer(),
            'name' => $this->string(255),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);

        $this->createTable('{{%tags}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'slug' => $this->string(255)->unique(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);

        $this->createTable('{{%products_archive}}', [
            'archive_id' => $this->integer(),
            'product_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);

        $this->createTable('{{%products_tags}}', [
            'tag_id' => $this->integer(),
            'product_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);
        $this->createTable('{{%medias_ref}}', [
            'id' => $this->primaryKey(),
            'obj_id' => $this->integer(),
            'media_id' => $this->integer(),
            'obj_type' => $this->string(255)->defaultValue('product'),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);

        $this->createTable('{{%articles}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'slug' => $this->string(255)->unique(),
            'content' => $this->text()->null(),
            'excerpt' => $this->string(255)->null(),
            'status' => $this->string(50)->defaultValue('draft'),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);

        $this->createTable('{{%seo_meta}}', [
            'id' => $this->primaryKey(),
            'obj_id' => $this->integer(),
            'obj_type' => $this->string(50)->defaultValue('product'),
            'meta_title' => $this->text()->null(),
            'meta_description' => $this->text()->null(),
            'meta_keyword' => $this->text()->null(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);
        $this->createTable('{{%payment_method}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'description' => $this->string(255)->null(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);
        $this->createTable('{{%payment_info}}', [
            'id' => $this->primaryKey(),
            'payment_id' => $this->integer(),
            'bank_account' => $this->string(255),
            'bank_name' => $this->string(255),
            'bank_number' => $this->string(50),
            'bank_branch' => $this->string(255),
            'note' => $this->string(255)->null(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);

        $this->createTable('{{%coupon}}', [
            'id' => $this->primaryKey(),
            'code' => $this->integer(),
            'description' => $this->integer(),
            'type' => $this->string()->defaultValue('percent'),
            'max' => $this->double(15.2)->defaultValue(0),
            'min' => $this->double(15.2)->defaultValue(0),
            'total' => $this->text()->null(),
            'free_ship' => $this->tinyInteger()->defaultValue(0),
            'exp_date' => $this->integer()->null(),
            'total_bill' => $this->double(15.2)->defaultValue(0),
            'total_discount' => $this->double(15.2)->defaultValue(0),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);

        $this->createTable('{{%coupon_rule}}', [
            'id' => $this->primaryKey(),
            'coupon_id' => $this->integer(),
            'include_products' => $this->string(255)->null(),
            'exclude_products' => $this->string(255)->null(),
            'include_archives' => $this->string(255)->null(),
            'exclude_archives' => $this->string(255)->null(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);

        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'product_option' => $this->text()->null(),
            'total_bill' => $this->double(15.2)->defaultValue(0),
            'total_discount' => $this->double(15.2)->defaultValue(0),
            'coupon_code' => $this->string(255)->null(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);

        $this->createTable('{{%orders_customers}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(255),
            'last_name' => $this->string(255),
            'company' => $this->string(255)->null(),
            'country' => $this->string(255),
            'address' => $this->string(255),
            'zipcode' => $this->string(50)->null(),
            'city' => $this->string(255),
            'phone' => $this->string(15)->null(),
            'email' => $this->string(150),
            'note' => $this->string(255)->null(),
            'payment_method' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210301_192312_init_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210301_192312_init_table cannot be reverted.\n";

        return false;
    }
    */
}
