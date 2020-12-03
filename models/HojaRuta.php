<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoja_ruta".
 *
 * @property int $id_hoja_ruta
 * @property int $id_documento
 * @property int $id_area_origen
 * @property int $id_area_destino
 * @property int $id_estado
 * @property string $fecha
 * @property int $id_usuario_reg
 * @property string $observacion
 * @property int $flg_activo
 */
class HojaRuta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hoja_ruta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_documento', 'id_area_origen', 'id_area_destino', 'id_estado', 'fecha', 'id_usuario_reg'], 'required'],
            [['id_documento', 'id_area_origen', 'id_area_destino', 'id_estado', 'id_usuario_reg', 'flg_activo'], 'integer'],
            [['fecha'], 'safe'],
            [['observacion'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_hoja_ruta' => 'Id Hoja Ruta',
            'id_documento' => 'Id Documento',
            'id_area_origen' => 'Id Area Origen',
            'id_area_destino' => 'Id Area Destino',
            'id_estado' => 'Id Estado',
            'fecha' => 'Fecha',
            'id_usuario_reg' => 'Id Usuario Reg',
            'observacion' => 'Observacion',
            'flg_activo' => 'Flg Activo',
        ];
    }
}
