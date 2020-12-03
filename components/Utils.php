<?php

namespace app\components;

class Utils {

    public static function encodeUrlTripleDes($string) {
        return str_replace(" ", "+", $string);
    }

    public static function show($data, $detenerProcesos = false, $titulo = 'Datos') {
        echo "<code class='code'><b>{$titulo} :</b></code>";
        echo "<pre>";
        print_r($data);
        echo '</pre>';
        if ($detenerProcesos) {
            die();
        }
    }

    /**
     * Funcion que encripta un valor para ser usado como token.
     * @param string $valor valor a ser encriptado
     * @return string valor encriptado
     */
    public static function token($valor) {
        return sha1(TripleDes::Encrypt($valor));
    }

    public static function validarToken($token, $valor) {
        if ($token === self::token($valor)) {
            return true;
        }
        return false;
    }

    public static function getFechaActual() {
        return date('Y-m-d H:i:s');
    }

}
