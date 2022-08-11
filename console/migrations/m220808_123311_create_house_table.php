<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%house}}`.
 */
class m220808_123311_create_house_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%house}}', [
            'id' => $this->primaryKey(),
            'person_id' => $this->integer(),
            'description' => $this->string(60),
        ]);
        $this->addForeignKey('fk-person_id', 'house', 'person_id', 'person', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%house}}');
    }
}
