<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vw_mascotas".
 *
 * @property integer $idMascota
 * @property string $nombre
 * @property string $raza
 * @property integer $idTipoMascota
 * @property string $anoNacimiento
 * @property integer $estado
 * @property string $tipo
 */
class VwMascotas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vw_mascotas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idMascota', 'idTipoMascota', 'estado'], 'integer'],
            [['nombre', 'raza', 'idTipoMascota', 'anoNacimiento'], 'required'],
            [['nombre', 'raza', 'tipo'], 'string', 'max' => 32],
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
            'idTipoMascota' => 'Id Tipo Mascota',
            'anoNacimiento' => 'Año de nacimiento',
            'estado' => 'Estado',
            'tipo' => 'Tipo',
        ];
    }

    public function getPropietario()
    {
        $relHM = \app\models\HabitanteHasMascota::findOne(['idMascota' => $this->idMascota]);
        $propietario = ($relHM) ? \app\models\Habitantes::findOne($relHM->idHabitante) : false;
        return $propietario;
    }
}
