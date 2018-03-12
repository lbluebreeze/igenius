<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vw_habitantes".
 *
 * @property integer $idHabitante
 * @property string $nombres
 * @property string $apellidos
 * @property integer $documento
 * @property string $sexo
 * @property string $fechaNacimiento
 * @property string $emailHabitante
 * @property integer $telefono
 * @property integer $estado
 * @property integer $idApartamento
 * @property integer $numeroApartamento
 */
class VwHabitantes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vw_habitantes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idHabitante', 'documento', 'telefono', 'estado', 'idApartamento', 'numeroApartamento'], 'integer'],
            [['nombres', 'apellidos', 'documento', 'fechaNacimiento', 'emailHabitante', 'telefono'], 'required'],
            [['fechaNacimiento'], 'safe'],
            [['nombres', 'apellidos', 'emailHabitante'], 'string', 'max' => 30],
            [['sexo'], 'string', 'max' => 10]
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
            'idApartamento' => 'Id Apartamento',
            'numeroApartamento' => 'Apartamento',
        ];
    }
}
