<?php
session_start();
header('Location: inicio');
include("../entities/Estudiante.inc.php");
include("../daos/EstudianteMod.inc.php");
include("../daos/GerenteMod.inc.php");
require '../../libs/Smarty.class.php';


$smarty = new Smarty;
$smarty->debugging = true;

$lo=$_POST["login"];
$pa=$_POST["pass"];
$p=sha1($pa);

$mod= new EstudianteMod;

$log =  $mod->Obtener($lo);

if($p==$log->pass && $log->roll=="estudiante"){
	$_SESSION['loggedin'] = true;
 	$_SESSION['username'] = $lo;
 	$_SESSION['start'] = time();
 	$_SESSION['expire'] = $_SESSION['start'] + (100 * 600) ;
	$_SESSION['roll'] = "Estudiante";
}else if($p==$log->pass && $log->roll=="gerente"){
	$_SESSION['loggedin'] = true;
	$_SESSION['username'] = $lo;
	$_SESSION['start'] = time();
	$_SESSION['expire'] = $_SESSION['start'] + (100 * 600) ;
	$_SESSION['roll'] = "gerente";
	$_SESSION['empresa'] = $log->id_empresa;

	}

?>