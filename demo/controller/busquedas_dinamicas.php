<?php
error_reporting(0);
include '../daos/EmpresaMod.inc.php';
$param=$_POST["cadena"];
$empresa = new EmpresaMod();
$results=$empresa->dinamica($param);


foreach ($results as &$r) {
print "<div style='border-bottom: 1px solid #b3b4b8'><a href='resume_$r->id" ."' class=".'res'." >$r->nombre</a></div>";
}
print "<div><a href='nueva_empresa'><b>No encuentras tu empresa?</b></a></div>";