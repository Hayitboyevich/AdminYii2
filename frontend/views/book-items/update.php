<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BookItem */

$this->title = 'Update Book Item: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Book Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
