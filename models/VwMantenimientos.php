<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vw_mantenimientos".
 *
 * @property integer $idMantenimiento
 * @property string $fechaProgramacion
 * @property string $descripcionGeneral
 * @property integer $estado
 * @property integer $idEquipo
 * @property string $nombre
 */
class VwMantenimientos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vw_mantenimientos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idMantenimiento', 'estado', 'idEquipo'], 'integer'],
            [['fechaProgramacion', 'descripcionGeneral', 'nombre'], 'required'],
            [['fechaProgramacion'], 'safe'],
            [['descripcionGeneral'], 'string'],
            [['nombre'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idMantenimiento' => 'Id Mantenimiento',
            'fechaProgramacion' => 'Fecha Programacion',
            'descripcionGeneral' => 'Descripcion General',
            'estado' => 'Estado',
            'idEquipo' => 'Id Equipo',
            'nombre' => 'Nombre',
        ];
    }

    public function getEstado()
    {
        return ($this->estado) ? 'Activo' : 'Inactivo';
    }    
}
