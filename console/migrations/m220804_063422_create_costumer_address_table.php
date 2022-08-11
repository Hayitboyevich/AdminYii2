<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%costumer_address}}`.
 */
class m220804_063422_create_costumer_address_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%costumer_address}}', [
            'id' => $this->primaryKey(),
            'costumer_id' => $this->integer()->notNull(),
            'full_name' => $this->string()->notNull(),
            'address_line1' => $this->string()->notNull(),
            'address_line2' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
            'state' => $this->string()->notNull(),
            'country' => $this->string()->notNull(),
            'postal_code' => $this->string()->notNull(),
        ]);
        $this->addForeignKey('fk-costumer_id', 'costumer_address', 'costumer_id', 'costumer', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%costumer_address}}');
        $this->dropForeignKey('fk-costumer_id', 'costumer_address');
    }
}
