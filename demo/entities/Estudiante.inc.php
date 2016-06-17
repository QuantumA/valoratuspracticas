<?php

class Estudiante
{

   var $nombre;
   var $apellidos;
   var $login;
   var $pass;
   var $email;
   var $pais;
   var $ciudad;
   var $centro;
   var $media;
   var $fecha_reg;
	var $pts;
	var $roll="estudiante";

   
   function __construct(){
	   
	   }

	function estudiante_ranking($a,$b,$c){

		$this->login=$a;
		$this->ciudad=$b;
		$this->pts=$c;

	}

   function Estudiante($n,$a,$l,$p,$e,$pa,$c,$m,$r)
   {

	   $this->nombre = $n;
	   $this->apellidos = $a;
	   $this->login = $l;
	   $this->pass = $p;
	   $this->email = $e;
       $this->pais = $pa;
	   $this->ciudad = $c;
	   $this->centro = $m;
	   $this->media = $r;
	   $this->fecha_reg;
	   $this->pts;
      
   }
   
   function EstudianteVeloz($n,$a,$l)
   {


	   $this->login = $n;
	   $this->pass = $a;
	   $this->email = $l;

      die($n);
   }

	function Estudiante_update($n,$a,$e,$pa,$c,$m,$r,$log){


		$this->nombre = $n;
		$this->apellidos = $a;
		$this->email = $e;
		$this->pais = $pa;
		$this->ciudad = $c;
		$this->centro = $m;
		$this->media = $r;
		$this->login=$log;



	}

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>