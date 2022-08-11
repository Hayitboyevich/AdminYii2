<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DepDrop */

$this->title = 'Update Dep Drop: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dep Drops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dep-drop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
