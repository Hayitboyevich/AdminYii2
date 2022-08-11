<?php

namespace backend\models;

use Yii;
use function Sodium\add;
use backend\models\Region;
/**
 * This is the model class for table "depdrop".
 *
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property int $region_id
 * @property int $district_id
 * @property int $quarter_id
 *
 * @property DepDrop[] $depDrops
 * @property DepDrop[] $depDrops0
 * @property DepDrop[] $depDrops1
 * @property District $district
 * @property Quarter $quarter
 * @property Region $region
 */
class DepDrop extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'depdrop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name','last_name', 'region_id', 'district_id', 'quarter_id'], 'required'],
            ['name', 'validateName'],
            [['region_id', 'district_id', 'quarter_id'], 'integer'],
            [['last_name'], 'string', 'max' => 30],
            [['quarter_id'], 'exist', 'skipOnError' => true, 'targetClass' => Quarter::className(), 'targetAttribute' => ['quarter_id' => 'id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region_id' => 'id']],
        ];
    }

    public function validateName($attribute, $params)
    {

       if (strlen($this->name) > 5){
           $this->addError($attribute, 'Name toldirilishi kerak');
       }
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
            'region_id' => 'Region ID',
            'district_id' => 'District ID',
            'quarter_id' => 'Quarter ID',
        ];
    }

    /**
     * Gets query for [[DepDrops]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepDrops()
    {
        return $this->hasMany(DepDrop::className(), ['quarter_id' => 'id']);
    }

    /**
     * Gets query for [[DepDrops0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepDrops0()
    {
        return $this->hasMany(DepDrop::className(), ['district_id' => 'id']);
    }

    /**
     * Gets query for [[DepDrops1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepDrops1()
    {
        return $this->hasMany(DepDrop::className(), ['region_id' => 'id']);
    }

    /**
     * Gets query for [[District]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(District::className(), ['id' => 'district_id']);
    }

    /**
     * Gets query for [[Quarter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQuarter()
    {
        return $this->hasOne(Quarter::className(), ['id' => 'quarter_id']);
    }

    /**
     * Gets query for [[Region]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }
}
