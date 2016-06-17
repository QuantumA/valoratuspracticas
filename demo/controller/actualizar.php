<?php
header('Location: inicio');
include_once'../daos/EstudianteMod.inc.php';
$body =new Estudiante();
$est=new EstudianteMod();

$first=$_POST["first_name"];
$sec=$_POST["last_name"];
$media=$_POST["media"];
$centro=$_POST["centro"];
$email=$_POST["email"];
$pais=$_POST["pais"];
$ciudad=$_POST["ciudad"];
$log=$_POST["log"];



$body->Estudiante_update($first,$sec,$email,$pais,$ciudad,$centro,$media,$log);


$est->Actualizar($body);


