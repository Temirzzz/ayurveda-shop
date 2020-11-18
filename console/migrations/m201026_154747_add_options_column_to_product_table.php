<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%product}}`.
 */
class m201026_154747_add_options_column_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product', 'options', $this->json());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
}
