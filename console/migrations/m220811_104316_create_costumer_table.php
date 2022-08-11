<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%costumer}}`.
 */
class m220811_104316_create_costumer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%costumer}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30),
            'last_name' => $this->string(30),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%costumer}}');
    }
}
