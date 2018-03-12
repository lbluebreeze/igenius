<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Habitantes */

$this->title = 'Update Habitantes: ' . ' ' . $model->idHabitante;
$this->params['breadcrumbs'][] = ['label' => 'Habitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idHabitante, 'url' => ['view', 'id' => $model->idHabitante]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="habitantes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
