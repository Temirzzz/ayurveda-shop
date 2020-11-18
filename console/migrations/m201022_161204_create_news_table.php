<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m201022_161204_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'image' => $this->text(),
            'title' => $this->string(255),
            'contant' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
