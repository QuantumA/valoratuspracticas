<?php
header('Location: inicio');
include_once '../daos/CandidaturaMod.php';
$canmo= new CandidaturaMod();
$a=$_POST["id"];
$b=$_POST["lo"];
$c=$_POST["em"];
$can= new Candidatura();
$can->Candidatura($a,$b,$c);
$canmo->Registrar($can);

