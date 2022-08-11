<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "costumer_address".
 *
 * @property int $id
 * @property int|null $costumer_id
 * @property int|null $city
 * @property int|null $state
 * @property string|null $post_code
 *
 * @property Costumer $costumer
 */
class CostumerAddress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'costumer_address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city', 'state', 'post_code'], 'required'],
            [['city', 'state'], 'integer'],
            [['post_code'], 'string', 'max' => 30],
            [['costumer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Costumer::className(), 'targetAttribute' => ['costumer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'costumer_id' => 'Costumer ID',
            'city' => 'City',
            'state' => 'State',
            'post_code' => 'Post Code',
        ];
    }

    /**
     * Gets query for [[Costumer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCostumer()
    {
        return $this->hasOne(Costumer::className(), ['id' => 'costumer_id']);
    }
}
