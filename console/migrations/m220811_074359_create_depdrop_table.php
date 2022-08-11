<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%depdrop}}`.
 */
class m220811_074359_create_depdrop_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%depdrop}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30),
            'last_name' => $this->string(30),
            'region_id' => $this->integer(),
            'district_id' => $this->integer(),
            'quarter_id' => $this->integer(),
        ]);
        $this->addForeignKey('fk-region_id', 'depdrop', 'region_id', 'region', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-district_id', 'depdrop', 'district_id', 'district', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-quarter_id', 'depdrop', 'quarter_id', 'quarter', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%depdrop}}');
    }
}
