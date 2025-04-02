<?php 
class UsuariosController{

    public function ingresoUsuariosC(){

        if(isset($_POST["usuario-Ing"])){

            if( preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario-Ing"]) &&
            preg_match('/^[a-zA-Z0-9]+$/', $_POST["clave-Ing"])){

                $datosC = ["usuario"=>$_POST["usuario-Ing"], "clave"=>$_POST["clave-Ing"]];
                $tablaBD = "usuarios";
                $respuesta = UsuarioModel::ingresoUsuariosM($datosC, $tablaBD);

                if($respuesta["usuario"] == $_POST["usuario-Ing"] && 
                $respuesta["clave"] == $_POST["clave-Ing"]){

                    $_SESSION["ingreso"]= true;
                    $_SESSION["id"] = $respuesta["id"];
                    $_SESSION["usuario"] = $respuesta["usuario"];
                    $_SESSION["clave"] = $respuesta["clave"];
                    $_SESSION["foto"] = $respuesta["foto"];
                    $_SESSION["rol"] = $respuesta["rol"];


                    echo "<script>
                        window.location= 'inicio';
                    </script>
                    ";
                }else{
                    echo "ERROR AL INGRESAR";
                }
            }
        }
    }
}