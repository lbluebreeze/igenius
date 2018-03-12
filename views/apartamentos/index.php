<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ApartamentosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apartamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apartamentos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= (Yii::$app->user->identity->id_rol === 1) ? Html::a('Create Apartamentos', ['create'], ['class' => 'btn btn-success']) : '' ?>
    </p>

    <?php
        $columns = [
            ['class' => 'yii\grid\SerialColumn'],

            // 'idApartamento',
            'numeroApartamento',
            'disponibilidad',
        ];
        if (Yii::$app->user->identity->id_rol === 1) {
            $columns[] =  [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {manage}',
                'buttons' => [
                    'manage' => function($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-list-alt" title="Administrar"></span>', $url);
                    },
                ],
            ];
        }
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => 'Mostrando <strong>{count}</strong> de <strong>{totalCount}</strong> resultados',
        'columns' => $columns,
    ]); ?>

</div>
