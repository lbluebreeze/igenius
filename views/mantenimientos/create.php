<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mantenimientos */

$this->title = 'Create Mantenimientos';
$this->params['breadcrumbs'][] = ['label' => 'Mantenimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mantenimientos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'relmodel' => $relmodel,
    ]) ?>

</div>
