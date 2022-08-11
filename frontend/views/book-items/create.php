<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BookItem */

$this->title = 'Create Book Item';
$this->params['breadcrumbs'][] = ['label' => 'Book Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
