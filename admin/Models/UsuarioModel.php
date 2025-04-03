<?php 

require_once("ConexionBD.php");

class UsuarioModel extends ConexionBD{


    // Ingresar al Gestor
    public static function ingresoUsuariosM($datosC, $tablaBD){

        $pdo = ConexionBD::conectarBD()->
                prepare("SELECT usuario, clave, foto, rol, id FROM $tablaBD WHERE usuario = :usuario");

        $pdo->bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);

        $pdo->execute();

        return $pdo->fetch();
    }


    // Ver usuario
    public static function verUsuariosModelo($tablaBD){

        $pdo = ConexionBD::conectarBD()
                ->prepare("SELECT id, usuario, clave, foto, rol FROM $tablaBD");
        
        $pdo->execute();

        return $pdo->fetchAll();

    }
}