<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\About */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'О нас', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
