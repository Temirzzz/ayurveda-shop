<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%catalog}}`.
 */
class m201026_155146_add_options_column_to_catalog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('catalog', 'options', $this->json());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
}
