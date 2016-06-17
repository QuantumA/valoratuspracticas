<?php

class Administrador
{
   var $nombre;
   var $apellido1;
   var $apellido2;
   var $dni;
   var $fecha_nac;
   var $email;
   var $pass;
   var $fecha_reg;

	function __construct(){}
   
   
   function Administrador($n,$a1,$a2,$d,$f,$e,$p)
   {
       $this->nombre = $n;
       $this->apellido1 = $a1;
	   $this->apellido2 = $a2;
	   $this->dni = $d;
	   $this->fecha_nac = $f;
       $this->email = $e;
	   $this->pass = $p;
	   $this->fecha_reg;
      
   }

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>