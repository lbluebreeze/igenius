<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mascotas".
 *
 * @property integer $idMascota
 * @property string $nombre
 * @property string $raza
 * @property integer $idTipoMascota
 * @property string $anoNacimiento
 * @property integer $estado
 */
class Mascotas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mascotas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'raza', 'idTipoMascota', 'anoNacimiento'], 'required'],
            [['idTipoMascota', 'estado'], 'integer'],
            [['nombre', 'raza'], 'string', 'max' => 32],
            [['anoNacimiento'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idMascota' => 'Id Mascota',
            'nombre' => 'Nombre',
            'raza' => 'Raza',
            'idTipoMascota' => 'Tipo',
            'anoNacimiento' => 'Año de nacimiento',
            'estado' => 'Estado',
        ];
    }

    public function getTipo()
    {
        $tipo = \app\models\Tipomascotas::findOne($this->idTipoMascota);
        return ($tipo) ? $tipo->nombre : false;
    }

    public function getEstado()
    {
        return ($this->estado) ? 'Activo' : 'Inactivo';
    }
}
