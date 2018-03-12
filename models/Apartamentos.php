<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apartamentos".
 *
 * @property integer $idApartamento
 * @property integer $numeroApartamento
 */
class Apartamentos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apartamentos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numeroApartamento'], 'required'],
            [['numeroApartamento'], 'integer'],
            [['numeroApartamento'], 'unique', 'message' => 'El apartamento ya existe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idApartamento' => 'Id Apartamento',
            'numeroApartamento' => 'Apartamento',
        ];
    }
}
