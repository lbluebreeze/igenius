<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property integer $idUsuario
 * @property string $usuario
 * @property string $documento
 * @property string $contrasena
 * @property integer $id_rol
 *
 * @property Notificaciones[] $notificaciones
 * @property Rol $idRol
 */
class Usuarios extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario', 'documento', 'contrasena', 'id_rol'], 'required'],
            [['id_rol'], 'integer'],
            [['usuario'], 'string', 'max' => 30],
            [['documento'], 'string', 'max' => 20],
            [['contrasena'], 'string', 'max' => 255],
            [['documento'], 'unique', 'message' => 'Ya existe un usuario con este documento'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUsuario' => 'Id Usuario',
            'usuario' => 'Nombre',
            'documento' => 'Documento',
            'contrasena' => 'Contraseña',
            'id_rol' => 'Rol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotificaciones()
    {
        return $this->hasMany(Notificaciones::className(), ['idUsuario' => 'idUsuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRol()
    {
        return $this->hasOne(Rol::className(), ['id_rol' => 'id_rol']);
    }

    public function getRol()
    {
        $rol = self::getIdRol()->one();
        return ($rol) ? $rol->nombre_rol : false;
    }

    public static function findByUsername($username)
    {
        return self::findOne(['documento' => $username]);
    }

    public function validatePassword($password)
    {
        return $this->contrasena === $password;
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getAuthKey()
    {
        return null;
    }

    public function validateAuthKey($authKey)
    {
        return null;
    }

    public function getUsuarios()
    {
        return yii\helpers\ArrayHelper::map(Usuarios::find()->all(), 'idUsuario', 'usuario');
    }
}
