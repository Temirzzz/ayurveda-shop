<?php

use yii\db\Migration;

/**
 * Class m201026_160126_rename_options_column_to_catalog_table
 */
class m201026_160126_rename_options_column_to_catalog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('catalog', 'category');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201026_160126_rename_options_column_to_catalog_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201026_160126_rename_options_column_to_catalog_table cannot be reverted.\n";

        return false;
    }
    */
}
