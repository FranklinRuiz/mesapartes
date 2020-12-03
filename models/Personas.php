<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personas".
 *
 * @property int $id_persona
 * @property string $dni
 * @property string $nombres
 * @property string $apellido_paterno
 * @property string $apellido_materno
 */
class Personas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dni', 'nombres', 'apellido_paterno', 'apellido_materno'], 'required'],
            [['dni'], 'string', 'max' => 8],
            [['nombres', 'apellido_paterno', 'apellido_materno'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_persona' => 'Id Persona',
            'dni' => 'Dni',
            'nombres' => 'Nombres',
            'apellido_paterno' => 'Apellido Paterno',
            'apellido_materno' => 'Apellido Materno',
        ];
    }
}
