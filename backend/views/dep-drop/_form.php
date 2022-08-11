<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\RegionList;
use kartik\depdrop\DepDrop;

/* @var $this yii\web\View */
/* @var $model backend\models\DepDrop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dep-drop-form">
    <div class="card">
        <div class="card-body">
            <?php $form = ActiveForm::begin([
                    'enableAjaxValidation' => true,
            ]); ?>



            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'region_id')->dropDownList(RegionList::regions(), [
                'id' => 'region-id',
                'prompt' => 'Viloyatni tanlang...'
            ]) ?>

            <?= $form->field($model, 'district_id')->widget(DepDrop::classname(), [
                'options' => ['id' => 'district-id'],
                'data' => RegionList::getDistrict($model->region_id),
                'pluginOptions' => [
                    'depends' => ['region-id'],
                    'placeholder' => 'Tumanni tanlang ...',
                    'url' => \yii\helpers\Url::to(['dep-drop/district'])
                ]
            ]) ?>

            <?= $form->field($model, 'quarter_id')->widget(DepDrop::className(), [
                'options' => ['id' => 'quarter-id'],
                'data' => RegionList::getQuarter($model->district_id),
                'pluginOptions' => [
                    'depends' => ['district-id'],
                    'placeholder' => 'Mahallani tanlang ...',
                    'url' => \yii\helpers\Url::to(['dep-drop/quarter'])
                ]
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>


</div>
