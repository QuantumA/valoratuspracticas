<?php

class Practicas
{

   var $id_empresa;
   var $id_practica;
   var $titulo;
   var $estudios_min;
   var $descripcion;
   var $salario;
   var $nota_minima;
   var $provincia;
   var $duracion;


	function __construct(){}

   function Practicas($i,$a,$l,$p,$e,$f,$w,$r)
   {

	   $this->id_empresa=$i;
	   $this->id_practica;
	   $this->titulo = $a;
	   $this->estudios_min = $l;
	   $this->descripcion = $p;
	   $this->salario = $e;
	   $this->nota_minima = $f;
	   $this->provincia =$w;
	   $this->duracion=$r;
	   
   }

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>