

<?php

class Gerente
{

   var $id_empresa;
   var $dni;
   var $email;
   var $telefono;
   var $login;
   var $pass;
   var $fecha_reg;
	var $roll="gerente";


	function __construct(){}
   
   function Gerente($n,$a,$l,$p,$e,$f)
   {

	   $this->id_empresa = $n;
	   $this->dni = $a;
	   $this->email = $l;
	   $this->telefono = $p;
	   $this->login = $e;
       $this->pass = $f;
	   $this->fecha_reg;

      
   }

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>