<?php

use yii\db\Migration;

/**
 * Class m180308_165321_default_collection_init
 */
class m180308_165321_default_collection_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180308_165321_default_collection_init cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql')
        {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('article', [
            'id'                  => $this->primaryKey(),
            'caption'             => $this->string()->notNull()->unique(),
            'description'         => $this->text()->notNull(),
            'thumbnail_image_url' => $this->string(128)->notNull(),
            'details_url'         => $this->string(128),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('article');
    }
}
