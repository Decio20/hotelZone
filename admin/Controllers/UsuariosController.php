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