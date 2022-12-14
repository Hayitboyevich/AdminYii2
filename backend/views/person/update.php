<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Person */

$this->title = 'Update Person: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'People', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="person-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'modelPerson' => $model,
        'modelsHouse' => $modelsHouse,
        'modelsRoom' => $modelsRoom,
    ]) ?>

</div>
