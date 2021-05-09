<?php


namespace App\Helpers;


class Tools
{

    public static function shout(string $string) {
        return strtoupper($string);
    }

    public static function encryption() {
        return new EncryptionTools();
    }

    public static function number() {
        return new NumberTools();
    }

    public static function text() {
        return new TextTools();
    }

}
