<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%costumer_address}}`.
 */
class m220811_104327_create_costumer_address_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%costumer_address}}', [
            'id' => $this->primaryKey(),
            'costumer_id' => $this->integer(),
            'city' => $this->integer(),
            'state' => $this->integer(),
            'post_code' => $this->string(30),
        ]);
        $this->addForeignKey('fk-costumer_id', 'costumer_address', 'costumer_id', 'costumer', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%costumer_address}}');
    }
}
