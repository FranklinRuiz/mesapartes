<?php

namespace app\components;

use Yii;

class Menu {

    public static function getListaMenu() {
        $result = [];
        try {
            $command = Yii::$app->db->createCommand('call spListadoMenu(:id_rol)');
            $command->bindValue(':id_rol', Yii::$app->user->identity->id_rol);
            $result = $command->queryAll();
        } catch (\Exception $e) {
            echo "Error al ejecutar procedimiento" . $e;
        }
        return $result;
    }

}
