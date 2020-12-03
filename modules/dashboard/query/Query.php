<?php

namespace app\modules\dashboard\query;

use Yii;

Class Query {

    public static function cantidadDocumentos() {
        $sql = "select 
	(select count(*) from documentos WHERE estado = 1) as pendiente,
	(select count(*) from documentos WHERE estado = 2) as recepcionado,
	(select count(*) from hoja_ruta where id_estado = 3 and flg_activo = 1) as derivado";
        $command = Yii::$app->db->createCommand($sql);
        return $command->queryOne();
    }

    public static function cantidadDocumentosArea() {
        $sql = "select 
	a.nombre,
	(select count(*) from hoja_ruta where flg_activo = 1 and id_area_destino = a.id_area and id_estado = 1) as pendiente,
	(select count(*) from hoja_ruta where flg_activo = 1 and id_area_destino = a.id_area and id_estado = 2) as recepcionado,
	(select count(*) from hoja_ruta where flg_activo = 1 and id_area_destino = a.id_area and id_estado = 3) as derivado
	from areas a ";
        $command = Yii::$app->db->createCommand($sql);
        return $command->queryAll();
    }

    public static function cantidadDocumentosFecha() {
        $sql = "select count(*) as cantidad, STR_TO_DATE(fecha, '%Y-%m-%d') as fecha from hoja_ruta where id_area_origen = 1 group by STR_TO_DATE(fecha, '%Y-%m-%d')";
        $command = Yii::$app->db->createCommand($sql);
        return $command->queryAll();
    }

}
