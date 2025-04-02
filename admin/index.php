<?php
require_once("Controllers/PlantillaController.php");
require_once("Controllers/UsuariosController.php");
require_once("Models/UsuarioModel.php");

$plantilla = new PlantillaController();
$plantilla->llamarPlantilla();