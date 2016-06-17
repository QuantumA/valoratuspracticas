
<?php

class Valoraciones
{

   var $id_valoracion;
   var $login;
   var $id_empresa;
   var $titulo;
   var $comentario;
   var $pregunta1;
   var $pregunta2;
   var $pregunta3;
   var $pregunta4;
   var $pregunta5;
   var $pregunta6;
   var $pregunta7;
   var $pregunta8;
	var $fecha;


	function __construct(){}


	function Valoraciones($a,$g,$l,$p,$z,$x,$c,$b,$n,$m,$o,$j)
   {

	   $this->id_valoracion;
	   $this->login=$a;
	   $this->id_empresa = $g;
	   $this->titulo = $l;
	   $this->comentario = $p;
	   $this->pregunta1 = $z;
	   $this->pregunta2 = $x;
	   $this->pregunta3 = $c;
	   $this->pregunta4 = $b;
	   $this->pregunta5 = $n;
	   $this->pregunta6 = $m;
	   $this->pregunta7 = $o;
	   $this->pregunta8 = $j;


      
   }

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>
