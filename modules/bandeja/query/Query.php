<?php

namespace app\modules\bandeja\query;

use Yii;

Class Query {

    public static function listaBandeja($idArea) {

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
                where h.flg_activo = 1 and h.id_area_destino = {$idArea}";

        $command = Yii::$app->db->createCommand($sql);
        return $command->queryAll();
    }

    public static function getIdHojaRuta($id) {
        $sql = "select id_hoja_ruta from hoja_ruta where id_documento = {$id} ORDER BY id_hoja_ruta DESC LIMIT 1";
        $command = Yii::$app->db->createCommand($sql);
        return $command->queryOne()["id_hoja_ruta"];
    }

    public static function getCorreo($id) {
        $sql = "select u.correo from hoja_ruta h
                inner join usuarios u on h.id_usuario_reg = u.id_usuario
                where h.id_documento = {$id}";
        $command = Yii::$app->db->createCommand($sql);
        return $command->queryOne()["correo"];
    }

}
