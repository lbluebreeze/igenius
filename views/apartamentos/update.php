<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\apartamentos */

$this->title = 'Update Apartamentos: ' . ' ' . $model->idApartamento;
$this->params['breadcrumbs'][] = ['label' => 'Apartamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idApartamento, 'url' => ['view', 'id' => $model->idApartamento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apartamentos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
