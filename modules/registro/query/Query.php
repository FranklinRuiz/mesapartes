<?php

namespace app\modules\registro\query;

use Yii;

Class Query {

    public static function generarNumero() {
        $sql = "select LPAD((MAX(numero)+1),4,'0') as numero from documentos";
        $command = Yii::$app->db->createCommand($sql);
        return $command->queryOne()["numero"] . "-" . date("Y");
    }

}
