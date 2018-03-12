<?php

namespace app\models;

use Yii;
use yii\data\ArrayDataProvider;

/**
 * This is the model class for table "habitantes".
 *
 * @property integer $idHabitante
 * @property string $nombres
 * @property string $apellidos
 * @property string $documento
 * @property string $sexo
 * @property string $fechaNacimiento
 * @property string $emailHabitante
 * @property string $telefono
 * @property integer $estado
 * @property string $fecha_mudanza 
    * @property string $fecha_salida 
 */
class Habitantes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'habitantes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombres', 'documento', 'fechaNacimiento', 'fecha_mudanza'], 'required'],
            [['estado'], 'integer'],
            [['documento', 'telefono'], 'string', 'max' => 50], 
            [['documento'], 'unique', 'message' => 'Ya existe un usuario con este documento'],
            [['fechaNacimiento', 'fecha_mudanza', 'fecha_salida'], 'safe'],
            [['nombres', 'apellidos', 'emailHabitante'], 'string', 'max' => 30],
            [['emailHabitante'], 'email'],
            [['sexo'], 'string', 'max' => 10],
            [['fecha_mudanza'], 'validarFechaM'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idHabitante' => 'Id Habitante',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'documento' => 'Documento',
            'sexo' => 'Sexo',
            'fechaNacimiento' => 'Fecha de nacimiento',
            'emailHabitante' => 'Email',
            'telefono' => 'Teléfono',
            'estado' => 'Estado',
            'fecha_mudanza' => 'Fecha de mudanza', 
            'fecha_salida' => 'Fecha de salida', 
        ];
    }

    public function getEstado()
    {
        return ($this->estado) ? 'Activo' : 'Inactivo';
    }

    public function getMascotas()
    {
        $relHM = \app\models\HabitanteHasMascota::findAll(['idHabitante' => $this->idHabitante]);

        $mascotas = [];
        foreach ($relHM as $key => $_rel) {
            $mascotas[] = \app\models\Mascotas::findOne($_rel->idMascota);
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $mascotas,
            'key' => 'idMascota',
        ]);
        
        return $dataProvider;
    }

    public function getVehiculos()
    {
        $relHV = \app\models\HabitanteHasVehiculo::findAll(['idHabitante' => $this->idHabitante]);

        $vehiculos = [];
        foreach ($relHV as $key => $_rel) {
            $vehiculos[] = \app\models\Vehiculos::findOne($_rel->idVehiculo);
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $vehiculos,
            'key' => 'idVehiculo',
        ]);
        
        return $dataProvider;
    }

    public function getIdPorDocumento($doc)
    {
        $model = Habitantes::findOne(['documento' => $doc]);
        return ($model) ? $model->idHabitante : 0;
    }

    public function validarFechaM($attribute, $params){
        if ($this->$attribute <= $this->fechaNacimiento) {
            $this->addError($attribute, "La fecha de mudanza no es válida (anterior a fecha de nacimiento).");
        }
    }
}
