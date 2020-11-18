<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%baner}}`.
 */
class m201020_141240_create_baner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%baner}}', [
            'id' => $this->primaryKey(),
            'image' => $this->text(),
            'contant' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%baner}}');
    }
}
