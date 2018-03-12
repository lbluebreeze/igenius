<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mantenimientos".
 *
 * @property integer $idMantenimiento
 * @property string $fechaProgramacion
 * @property string $descripcionGeneral
 * @property integer $estado
 */
class Mantenimientos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mantenimientos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fechaProgramacion', 'descripcionGeneral'], 'required'],
            [['fechaProgramacion'], 'safe'],
            [['descripcionGeneral'], 'string'],
            [['estado'], 'integer']
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
        ];
    }

    public function getEstado()
    {
        return ($this->estado) ? 'Activo' : 'Inactivo';
    }    
}
