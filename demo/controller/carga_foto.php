<?php
header('location: inicio');
include_once '../daos/Imagen.php';
include_once '../daos/EstudianteMod.inc.php';

$ficheroF = $_FILES["archivoF"];
$login = $_POST["login"];
$id= md5(login);
$cargador = new Imagen();
$estudiante= new EstudianteMod();
$src=$cargador->CrearLoc($id,$ficheroF,$login);
$estudiante->subir_ruta($src,$login);




