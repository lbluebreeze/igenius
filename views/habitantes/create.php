<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Habitantes */

$this->title = 'Create Habitantes';
$this->params['breadcrumbs'][] = ['label' => 'Habitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="habitantes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
