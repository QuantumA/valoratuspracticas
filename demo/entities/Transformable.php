<?php
/**
 * Created by PhpStorm.
 * User: aesmultimediasl
 * Date: 27/5/16
 * Time: 9:37
 */

class Transformable {

	function __construct(){}

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }

} 