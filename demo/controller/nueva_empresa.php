<?php
header('Location: inicio');
error_reporting(0);
include '../daos/EmpresaMod.inc.php';
include '../daos/EstudianteMod.inc.php';

$us= new EstudianteMod();
$cuerpo= new Empresa();
$empresa = new EmpresaMod();

$nombre=$_POST["nombre"];
$location=$_POST["localizacion"];
$sector=$_POST["sector"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$objeto=$_POST["objeto"];
$url=$_POST["url"];
$log=$_POST["log"];


$cuerpo->Empresa($nombre,$location,$sector,$direccion,$telefono,$objeto,$url);
$empresa->Registrar($cuerpo);

$us->sumar5($log);


