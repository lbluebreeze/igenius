<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipomascotas".
 *
 * @property integer $idTipoMascota
 * @property string $nombre
 */
class Tipomascotas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipomascotas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTipoMascota' => 'Id Tipo Mascota',
            'nombre' => 'Nombre',
        ];
    }

    public function getTipos()
    {
        return yii\helpers\ArrayHelper::map(Tipomascotas::find()->all(), 'idTipoMascota', 'nombre');
    }
}
