<?php

namespace app\controllers;

class RelhabitanteapartamentoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAdd($id, $ap)
    {
    	$relhabitanteapartamento = new \app\models\Relhabitanteapartamento;
    	$relhabitanteapartamento->idHabitante = $id;
    	$relhabitanteapartamento->idApartamento = $ap;
    	$relhabitanteapartamento->fechaInicio = date('Y-m-d');
    	if (!$relhabitanteapartamento->save()){
    		echo "<pre>";
    		print_r($relhabitanteapartamento->getErrors());
    		exit;
    	}
    	$this->redirect(['/apartamentos/manage', 'id' => $ap]);
    }

    public function actionDelete($id, $ap)
    {
    	$relhabitanteapartamento = \app\models\Relhabitanteapartamento::findOne(['idHabitante' => $id]);
    	if (!$relhabitanteapartamento->delete()){
    		echo "<pre>";
    		print_r($relhabitanteapartamento->getErrors());
    		exit;
    	}
    	$this->redirect(['/apartamentos/manage', 'id' => $ap]);
    }

}
