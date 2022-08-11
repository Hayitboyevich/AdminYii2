<?php


namespace backend\models;


use common\models\Responsible;
use yii\base\Model;
use yii\helpers\ArrayHelper;

class RegionList extends Model
{
    public static function regions()
    {
        return ArrayHelper::map(Region::find()->all(), 'id', 'name');
    }

    public static function districtsByRegion($id)
    {
        $data = District::find()->where(['region_id' => $id])->asArray()->all();

        return array_map(function($item) {
            return [
                'id' => (int)$item['id'],
                'name' => $item['name']
            ];
        }, $data);
    }

    public static function quartersByDistrict($id)
    {
        $data = Quarter::find()->where(['district_id' => $id])->asArray()->all();
        return array_map(function($item) {
            return [
                'id' => (int)$item['id'],
                'name' => $item['name']
            ];
        }, $data);
    }

    public static function getDistrict($id)
    {
        return  ArrayHelper::map(District::find()->where(['region_id' => $id])->all(), 'id', 'name');
    }

    public static function getQuarter($id)
    {
        return  ArrayHelper::map(Quarter::find()->where(['district_id' => $id])->all(), 'id', 'name');
    }


}