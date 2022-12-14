<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DepDrop;

/**
 * DepDropSearch represents the model behind the search form of `backend\models\DepDrop`.
 */
class DepDropSearch extends DepDrop
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'last_name', 'region_id', 'district_id', 'quarter_id'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DepDrop::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }


        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->joinWith('region');
        $query->joinWith('district');
        $query->joinWith('quarter');


        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'region.name', $this->region_id])
            ->andFilterWhere(['like', 'district.name', $this->district_id])
            ->andFilterWhere(['like', 'quarter.name', $this->quarter_id]);

        return $dataProvider;
    }



}
