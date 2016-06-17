<?php
header('Location: inicio');
require_once '../utils/Clase-inputfilter/class.inputfilter.php';
require_once '../daos/PracticasMod.inc.php';
$filtro = new InputFilter();
$pra= new PracticasMod();
$id=$_POST["id"];
$titulo=$filtro->process($_POST["titulo"]);
$estudios=$filtro->process($_POST["estudios"]);
$salario=$filtro->process($_POST["salario"]);
$nota=$filtro->process($_POST["nota"]);
$provincia=$filtro->process($_POST["provincia"]);
$duracion=$filtro->process($_POST["duracion"]);
$coment=$filtro->process($_POST["coment"]);


$pract= new Practicas();
$pract->Practicas($id,$titulo,$estudios,$coment,$salario,$nota,$provincia,$duracion);

$pra->Registrar($pract);

