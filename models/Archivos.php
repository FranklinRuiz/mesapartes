<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "archivos".
 *
 * @property int $id_archivo
 * @property int $id_documento
 * @property string $nombre
 * @property string $ruta
 * @property int $flg_tipo
 * @property int $estado
 */
class Archivos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'archivos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_documento', 'nombre', 'ruta', 'flg_tipo', 'estado'], 'required'],
            [['id_documento', 'flg_tipo', 'estado'], 'integer'],
            [['nombre', 'ruta'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_archivo' => 'Id Archivo',
            'id_documento' => 'Id Documento',
            'nombre' => 'Nombre',
            'ruta' => 'Ruta',
            'flg_tipo' => 'Flg Tipo',
            'estado' => 'Estado',
        ];
    }
}
