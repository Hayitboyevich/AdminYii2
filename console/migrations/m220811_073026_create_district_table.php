<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%district}}`.
 */
class m220811_073026_create_district_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%district}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30),
            'region_id' => $this->integer(),
        ]);
        $this->addForeignKey('fk-region_id', 'district', 'region_id', 'region', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%district}}');
    }
}
