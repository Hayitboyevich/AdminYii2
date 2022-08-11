<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DepDrop */

$this->title = 'Create Dep Drop';
$this->params['breadcrumbs'][] = ['label' => 'Dep Drops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dep-drop-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
