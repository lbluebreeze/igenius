<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\apartamentos */

Yii::$app->session['idApartamento'] = $model->idApartamento;

$this->title = 'Administrar Apartamentos';
$this->params['breadcrumbs'][] = ['label' => 'Apartamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->numeroApartamento, 'url' => ['view', 'id' => $model->idApartamento]];
$this->params['breadcrumbs'][] = 'Administrar';
?>
<div class="apartamentos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <h3>Habitantes en el apartamento <?= $model->numeroApartamento ?></h3>

    <?= GridView::widget([
    	'dataProvider' => $habitantesAct,
        'summary' => 'Mostrando <strong>{count}</strong> de <strong>{totalCount}</strong> resultados',
    	'columns' => [
    		['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'idHabitante',
                'content' => function($model, $key, $index, $column) {
                    return Html::a($model->idHabitante, ["habitantes/view?id={$model->idHabitante}"]);
                }
            ],
    		'nombres',
    		'apellidos',
    		'documento',
            [
                'class' => 'yii\grid\ActionColumn',
                'controller' => 'relhabitanteapartamento',
                'template' => '{delete}',
                'buttons' => [
                    'delete' => function($url, $vwmodel, $key){
                        return Html::a('<span class="glyphicon glyphicon-minus" title="Eliminar"></span>', "$url&ap=".Yii::$app->session['idApartamento']);
                    },
                ],
            ],
    	],
    ]) ?>

    <h3>Habitantes sin asignar</h3>

    <?= GridView::widget([
        'dataProvider' => $habitantesDisp,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'idHabitante',
                'content' => function($model, $key, $index, $column) {
                    return Html::a($model->idHabitante, ["habitantes/view?id={$model->idHabitante}"]);
                }
            ],
            'nombres',
            'apellidos',
            'documento',
            [
                'class' => 'yii\grid\ActionColumn',
                'controller' => 'relhabitanteapartamento',
                'template' => '{add}',
                'buttons' => [
                    'add' => function($url, $vwmodel, $key){
                        return Html::a('<span class="glyphicon glyphicon-plus" title="Añadir"></span>', "$url&ap=".Yii::$app->session['idApartamento']);
                    },
                ],
            ],
        ],
    ]) ?>

</div>
