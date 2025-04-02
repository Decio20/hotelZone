<?php 

require_once("ConexionBD.php");

class UsuarioModel extends ConexionBD{

    public static function ingresoUsuariosM($datosC, $tablaBD){

        $pdo = ConexionBD::conectarBD()->
                prepare("SELECT usuario, clave, foto, rol, id FROM $tablaBD WHERE usuario = :usuario");

        $pdo->bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);

        $pdo->execute();

        return $pdo->fetch();
    }
}