<?php
/**
 * Created by PhpStorm.
 * User: aesmultimediasl
 * Date: 12/5/16
 * Time: 9:22
 */

class Candidatura {


	var $id_candidatura;
	var $id_usuario;
	var $id_empresa;
	var $fecha_inicio;
	var $aceptada;


	function __construct(){}


	function Candidatura($a,$b,$c)
	{
		$this->id_candidatura;
		$this->id_usuario =$b ;
		$this->id_practicas = $a;
		$this->id_empresa = $c;
		$this->fecha_inicio;
		$this->aceptada;

	}

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
} 