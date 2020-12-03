<?php

namespace app\modules\seguimiento\query;

use Yii;

Class Query {

    public static function listaBandeja($idUsuario) {

        $sql = "select
                    d.numero,
                    d.asunto,
                    d.descripcion,
                    ao.nombre as area,
                    h.fecha,
                    e.nombre as estado,
                    d.id_documento
                from hoja_ruta h
                inner join documentos d on h.id_documento = d.id_documento
                inner join areas ao on h.id_area_origen = ao.id_area
                inner join estados e on h.id_estado = e.id_estado
                where h.id_usuario_reg = {$idUsuario}";

        $command = Yii::$app->db->createCommand($sql);
        return $command->queryAll();
    }

    public static function seguimientoDocumento($idDocumento) {

        $sql = "select 
                    a.nombre as area,
                    e.nombre as estado,
                    h.fecha
                from hoja_ruta h
                inner join areas a on h.id_area_destino = a.id_area
                inner join estados e on h.id_estado = e.id_estado
                where id_documento  = {$idDocumento}";

        $command = Yii::$app->db->createCommand($sql);
        return $command->queryAll();
    }

}
