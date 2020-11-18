<?php

use yii\db\Migration;

/**
 * Class m201021_142003_banner_column_change
 */
class m201021_142003_banner_column_change extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addColumn('baner', 'title', $this->string(255)->null());
        $this->addColumn('baner', 'href', $this->string(255)->null());


    }

    
}
