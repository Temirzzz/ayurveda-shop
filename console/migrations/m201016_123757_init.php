<?php

use yii\db\Migration;

/**
 * Class m201016_123757_init
 */
class m201016_123757_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $date = date('Y-m-d H:i:s');
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'role' => $this->integer()->defaultValue(1),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addCommentOnColumn('{{%user}}','status','9 - requires verification, 10 - verified');

        // Insert admin record with password 'admin'. Don't forget to change password after deploy!
        $this->insert('{{%user}}', [
            'username'             => '88006661313',
            'auth_key'             => 'IKDKkXg7zbePLFQwg974uGXxiULm33C5',
            'password_hash'        => '$2y$13$Ksc5aUFPiT/tWFKZveVU8uhrRJk6/62r6jYNX1xVlA0bENa6cSlHu',
            'password_reset_token' => '',
            'email'                => 'hello@example.net',
            'status'               => 10, // STATUS_ACTIVE
            'created_at'           => 1464607507,
            'updated_at'           => 1464607507,
            'role'                 => 10
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%user}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201016_123757_init cannot be reverted.\n";

        return false;
    }
    */
}
