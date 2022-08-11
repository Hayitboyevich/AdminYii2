<?php


namespace common\models;


use yii\db\ActiveRecord;

class Person extends ActiveRecord
{
    public static function tableName()
    {
        return '{{person}}';
    }

}