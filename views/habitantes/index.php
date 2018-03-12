<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VwHabitantesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Habitantes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="habitantes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Habitantes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => 'Mostrando <strong>{count}</strong> de <strong>{totalCount}</strong> resultados',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'idHabitante',
            'nombres',
            'apellidos',
            'documento',
            'sexo',
            // 'fechaNacimiento',
            // 'emailHabitante:email',
            // 'telefono',
            // 'estado',
            [
                'attribute' => 'numeroApartamento',
                'content' => function($model, $key, $index, $column){
                    return Html::a($model->numeroApartamento, ["apartamentos/manage?id={$model->idApartamento}"]);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
