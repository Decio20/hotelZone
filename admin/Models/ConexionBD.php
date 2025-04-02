<?php

class ConexionBD{

    public static function conectarBD(){

        $bd = new PDO("mysql:host=localhost;dbname=hotelzone", "root", "");

        $bd->exec("set names utf8");

        return $bd;
    }
}