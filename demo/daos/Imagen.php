<?php
/**
 * Created by PhpStorm.
 * User: aesmultimediasl
 * Date: 31/5/16
 * Time: 15:48
 */

class Imagen {


	private $pdo;

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = new PDO('mysql:host=localhost; dbname=valoratuspracticas', 'usuario', 'usuario');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}





	public static function CrearLoc($id,$ficheroF,$login)//Crea las localizaciones de las imagenes de cada anuncio y usuario en el servidor.
	{
		
		$fotosPermitidas = array("image/png","image/jpg","image/jpeg");
		$ruta='../fotos';
		$ruta2=$ruta.'/'.$id;

		if (!file_exists($ruta)){
			mkdir($ruta,0777);
		}

		if (!file_exists($ruta2)){

			mkdir($ruta2,0777);
		}

		

				if(in_array($ficheroF['type'], $fotosPermitidas)) {
					move_uploaded_file($ficheroF['tmp_name'],$ruta2.'/'.$ficheroF['name']);
			}
		
		return $ruta2.'/'.$ficheroF['name'];

	
	}

	public function getLocation($login){

		try {
			$stm = $this->pdo->prepare("SELECT imagen_src FROM estudiante WHERE login = :login ");
			$stm->bindValue(':login',"{$login}");
			$stm->execute();
			$result = $stm->fetchColumn();
			$result = ltrim($result, '../');
			return $result;
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

} 