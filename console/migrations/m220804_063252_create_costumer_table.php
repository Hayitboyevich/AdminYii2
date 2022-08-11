<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%costumer}}`.
 */
class m220804_063252_create_costumer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%costumer}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull()->comment('ismi'),
            'last_name' => $this->string()->notNull()->comment('famiyasi'),
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
