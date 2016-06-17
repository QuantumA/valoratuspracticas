<?php

header('Location: resume_'.$_POST['empresa_id']);
require_once '../utils/Clase-inputfilter/class.inputfilter.php';
require_once '../daos/ValoracionesMod.inc.php';
require_once '../daos/EmpresaMod.inc.php';
require_once '../entities/Valoraciones.inc.php';
$filtro = new InputFilter();
$empresa= new EmpresaMod();





$titulo=$filtro->process($_POST["titulo"]);
$comentario=$filtro->process($_POST["comentario"]);




$val = new Valoraciones();
$val->Valoraciones($_POST["login"],$_POST["empresa_id"],$titulo,$comentario,$_POST["uno"],$_POST["dos"],$_POST["tres"],$_POST["cuatro"],$_POST["cinco"],$_POST["seis"],$_POST["siete"],$_POST["ocho"]);

$registrador = new ValoracionesMod();

$registrador->Registrar($val);

$empresa->actualizaEstadisticas($_POST["empresa_id"]);




