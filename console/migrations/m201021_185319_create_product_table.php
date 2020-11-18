<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m201021_185319_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'alias' => $this->string(255),
            'image' => $this->text(),
            'title' => $this->string(255),
            'small_description' => $this->string(500),
            'description' => $this->text(),
            'old_price' => $this->float(),
            'new_price' => $this->float(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
