<?php
header("Location: inicio");
session_start();
include("../daos/EstudianteMod.inc.php");

$lo=$_POST["login"];
$co=$_POST["email"];
$pa=$_POST["pass"];



$pas = sha1($pa);
$Usr = new Estudiante;
$Usr->EstudianteVeloz($lo,$pas,$co);
$mod= new EstudianteMod;
$mod->RegistrarVeloz($Usr);
