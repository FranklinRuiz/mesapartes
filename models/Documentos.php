<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "documentos".
 *
 * @property int $id_documento
 * @property string $numero
 * @property string $asunto
 * @property string $descripcion
 * @property int $estado
 * @property int $id_area
 */
class Documentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'documentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numero', 'asunto'], 'required'],
            [['estado', 'id_area'], 'integer'],
            [['numero'], 'string', 'max' => 10],
            [['asunto', 'descripcion'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_documento' => 'Id Documento',
            'numero' => 'Numero',
            'asunto' => 'Asunto',
            'descripcion' => 'Descripcion',
            'estado' => 'Estado',
            'id_area' => 'Id Area',
        ];
    }
}
