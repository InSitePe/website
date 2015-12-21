<?php

class Utils {

    public static function show($array, $die = false) {
        echo '<pre>';
			print_r($array);
        echo '</pre>';
        if ($die === true)
            die();
    }

    public static function CleanSpecialCharacters($string) {
        return preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $string);
    }

    public static function iconFlash($type) {
        $icon = '';
        switch ($type) {
            case 'success':
                $icon = 'fa fa-check';
                break;
            case 'warning':
                $icon = 'fa fa-warning';
                break;
            case 'danger':
                $icon = 'fa fa-times-circle';
                break;
        }

        return $icon;
    }
    
    public static function verifyUTF($cadena){
        $cadena = str_replace('ñ', 'n', $cadena);
        $cadena = str_replace('Ñ', 'N', $cadena);
        $cadena = str_replace('Á', 'A', $cadena);
        $cadena = str_replace('É', 'E', $cadena);
        $cadena = str_replace('Í', 'I', $cadena);
        $cadena = str_replace('Ó', 'O', $cadena);
        $cadena = str_replace('Ú', 'U', $cadena);
        $cadena = str_replace('Ü', 'U', $cadena);
        $cadena = str_replace('á', 'a', $cadena);
        $cadena = str_replace('é', 'e', $cadena);
        $cadena = str_replace('í', 'i', $cadena);
        $cadena = str_replace('ó', 'o', $cadena);
        $cadena = str_replace('ó', 'u', $cadena);
        $cadena = str_replace('ü', 'u', $cadena);
        
        return $cadena;
    }

}
