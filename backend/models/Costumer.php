<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "costumer".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $last_name
 *
 * @property CostumerAddress[] $costumerAddresses
 */
class Costumer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'costumer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'last_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'last_name' => 'Last Name',
        ];
    }

    /**
     * Gets query for [[CostumerAddresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCostumerAddresses()
    {
        return $this->hasMany(CostumerAddress::className(), ['costumer_id' => 'id']);
    }
}
