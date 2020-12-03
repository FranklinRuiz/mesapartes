<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id_usuario
 * @property string $usuario
 * @property string $usuario_password
 * @property int $id_rol
 * @property int $id_persona
 * @property int $id_comercio
 * @property int $usuario_estado
 * @property int $id_usuario_reg
 * @property string $fecha_reg
 * @property string $ipmaq_reg
 * @property int $id_usuario_act
 * @property string $fecha_act
 * @property string $ipmaq_act
 * @property int $id_usuario_del
 * @property string $fecha_del
 * @property string $ipmaq_del
 */
class Usuarios extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [[ 'id_persona', 'id_area', 'estado'], 'integer'],
            [['usuario'], 'string', 'max' => 100],
            [['password', 'rol', 'correo', 'tipo_usuario'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id_usuario' => 'Id Usuario',
            'usuario' => 'Usuario',
            'password' => 'Usuario Password',
            'rol' => 'Rol',
            'id_persona' => 'Id Persona',
            'id_area' => 'Id Area',
            'correo' => 'Usuario correo',
            'tipo_usuario' => 'Tipo Usuario',
            'estado' => 'Usuario Estado'
        ];
    }

}
