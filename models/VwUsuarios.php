<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vw_usuarios".
 *
 * @property integer $idUsuario
 * @property string $usuario
 * @property integer $documento
 * @property string $contrasena
 * @property integer $id_rol
 * @property string $nombre_rol
 */
class VwUsuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vw_usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUsuario', 'documento', 'id_rol'], 'integer'],
            [['usuario', 'documento', 'contrasena', 'id_rol'], 'required'],
            [['usuario', 'nombre_rol'], 'string', 'max' => 30],
            [['contrasena'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUsuario' => 'Id Usuario',
            'usuario' => 'Usuario',
            'documento' => 'Documento',
            'contrasena' => 'Contrasena',
            'id_rol' => 'Id Rol',
            'nombre_rol' => 'Rol',
        ];
    }
}
