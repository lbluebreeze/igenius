<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipos".
 *
 * @property integer $idEquipo
 * @property string $nombre
 * @property string $descripcion
 * @property string $marca
 * @property string $modelo
 * @property integer $noSerie
 * @property string $proveedor
 * @property string $telefonoProveedor
 * @property string $tecnico
 * @property string $telefonoTecnico
 * @property string $fechaRegistro
 */
class Equipos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'marca', 'modelo', 'noSerie', 'proveedor', 'telefonoProveedor', 'tecnico', 'telefonoTecnico', 'fechaRegistro'], 'required'],
            [['descripcion'], 'string'],
            [['noSerie'], 'integer'],
            [['fechaRegistro'], 'safe'],
            [['nombre', 'marca', 'modelo', 'proveedor', 'tecnico'], 'string', 'max' => 32],
            [['telefonoProveedor', 'telefonoTecnico'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEquipo' => 'Id Equipo',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'noSerie' => 'No Serie',
            'proveedor' => 'Proveedor',
            'telefonoProveedor' => 'Telefono Proveedor',
            'tecnico' => 'Tecnico',
            'telefonoTecnico' => 'Telefono Tecnico',
            'fechaRegistro' => 'Fecha Registro',
        ];
    }

    public function getEquipos()
    {
        return yii\helpers\ArrayHelper::map(Equipos::find()->all(), 'idEquipo', 'nombre');
    }
}
