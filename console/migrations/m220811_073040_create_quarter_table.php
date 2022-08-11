<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%quarter}}`.
 */
class m220811_073040_create_quarter_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%quarter}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30),
            'district_id' => $this->integer(),
        ]);
        $this->addForeignKey('fk-district_id', 'quarter', 'district_id', 'district', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%quarter}}');
    }
}
