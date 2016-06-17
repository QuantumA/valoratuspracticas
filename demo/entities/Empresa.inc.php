

<?php

class Empresa
{
   var $id;
   var $nombre;
   var $localidad;
   var $sector;
   var $direccion;
   var $telefono;
   var $objeto_so;
   var $url;
   var $voto;
   var $puntos;


	function __construct(){}

	function Empresa_din($id,$nombre){

		$this->id=$id;
		$this->nombre = $nombre;


	}


   function Empresa($n,$l,$s,$d,$t,$o,$u)
   {
       $this->id;
       $this->nombre = $n;
	   $this->localidad = $l;
	   $this->sector = $s;
	   $this->direccion = $d;
       $this->telefono = $t;
	   $this->objeto_so = $o;
	   $this->url = $u;
	   $this->votos;
	   $this->puntos;
      
   }

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>