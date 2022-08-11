<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DepDropSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dep Drops';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dep-drop-index">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a('Create Dep Drop', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'name',
                    'last_name',
                    [
                        'attribute' => 'region_id',
                        'label' => 'Region',
                        'value' => function($res){
                            $r = \backend\models\Region::findOne($res->region_id);
                            return $r->name;
                        }
                    ],
                    [
                        'attribute' => 'district_id',
                        'label' => 'District',
                        'value' => 'district.name',
                    ],

                    [
                        'attribute' => 'district_id',
                        'label' => 'District',
                        'value' => function($res){
                            $r = \backend\models\Quarter::findOne($res->quarter_id);
                            return $r->name;
                        }
                    ],
                    [
                        'class' => ActionColumn::className(),
                    ],
                ],
            ]); ?>

</div>
