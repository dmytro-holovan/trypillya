<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Services */

$this->title = 'Обновить: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="services-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'imagesServices' => $imagesServices,
    ]) ?>

</div>
