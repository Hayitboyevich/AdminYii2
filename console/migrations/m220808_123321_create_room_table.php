<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%room}}`.
 */
class m220808_123321_create_room_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room}}', [
            'id' => $this->primaryKey(),
            'house_id' => $this->integer(),
            'description' => $this->string(60),
        ]);
        $this->addForeignKey('fk-house_id', 'room', 'house_id', 'house', 'id', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%room}}');
    }
}
