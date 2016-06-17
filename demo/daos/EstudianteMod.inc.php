<?php
include_once("../entities/Estudiante.inc.php");
include_once("../entities/Gerente.inc.php");



class EstudianteMod
{
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

	public function Listar()
	{
		try {
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM estudiante");
			$stm->execute();

			foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
				$alm = new Estudiante();
				$alm->__SET('nombre', $r->nombre);
				$alm->__SET('apellidos', $r->apellidos);
				$alm->__SET('login', $r->login);
				$alm->__SET('pass', $r->pass);
				$alm->__SET('email', $r->email);
				$alm->__SET('pais', $r->pais);
				$alm->__SET('ciudad', $r->ciudad);
				$alm->__SET('centro', $r->centro);
				$alm->__SET('media', $r->media);
				$alm->__SET('fecha_reg', $r->fecha_reg);

				$result[] = $alm;
			}

			return $result;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Obtener($login)
	{
		try {
			$stm = $this->pdo->prepare('SELECT * FROM estudiante WHERE login = ?');

			$stm->execute(array($login));
			$r = $stm->fetch(PDO::FETCH_OBJ);
			if(!empty($r)) {
				$alm = new Estudiante();
				$alm->__SET('nombre', $r->nombre);
				$alm->__SET('apellidos', $r->apellidos);
				$alm->__SET('login', $r->login);
				$alm->__SET('pass', $r->pass);
				$alm->__SET('email', $r->email);
				$alm->__SET('pais', $r->pais);
				$alm->__SET('ciudad', $r->ciudad);
				$alm->__SET('centro', $r->centro);
				$alm->__SET('media', $r->media);
				$alm->__SET('fecha_reg', $r->fecha_reg);
				$alm->__SET('pts', $r->puntos_colaboracion);


				return $alm;
			}else{
				$stm = $this->pdo->prepare('SELECT * FROM gerente WHERE dni = ?');
				$stm->execute(array($login));
				$r = $stm->fetch(PDO::FETCH_OBJ);
				$alm = new Gerente();
				$alm->__SET('id_empresa', $r->id_empresa);
				$alm->__SET('dni', $r->dni);
				$alm->__SET('email', $r->email);
				$alm->__SET('telefono', $r->telefono);
				$alm->__SET('login', $r->login);
				$alm->__SET('pass', $r->pass);
				$alm->__SET('fecha_reg', $r->fecha_reg);

				return $alm;
			}
		} catch (Exception $e) {
			die($e->getMessage());
		}


	}

	public function Eliminar($login)
	{
		try {
			$stm = $this->pdo
				->prepare("DELETE FROM estudiante WHERE login = ?");

			$stm->execute(array($login));
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Actualizar(Estudiante $data)
	{


		try {
			$sql = "UPDATE estudiante SET
                        nombre        = ?, 
                        apellidos  	= ?,
                        email  		= ?,
                        pais        = ?, 
                        ciudad  	= ?,
						centro        = ?, 
                        media  	= ?
                    WHERE login = ?";


	$this->pdo->prepare($sql)
				->execute(
					array(

						$data->__GET('nombre'),
						$data->__GET('apellidos'),
						$data->__GET('email'),
						$data->__GET('pais'),
						$data->__GET('ciudad'),
						$data->__GET('centro'),
						$data->__GET('media'),
						$data->__GET('login')
					)
				);



		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(Estudiante $data)
	{
		try {
			$sql = "INSERT INTO estudiante (nombre,apellidos,login,pass,email,pais,ciudad,centro,media)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->__GET('nombre'),
						$data->__GET('apellidos'),
						$data->__GET('login'),
						$data->__GET('pass'),
						$data->__GET('email'),
						$data->__GET('pais'),
						$data->__GET('ciudad'),
						$data->__GET('centro'),
						$data->__GET('media'),


					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function RegistrarVeloz(Estudiante $data)
	{


		try {
			$sql = "INSERT INTO estudiante (login,pass,email) VALUES (?, ?, ?)";


			$this->pdo->prepare($sql)
				->execute(
					array(

						$data->__GET('login'),
						$data->__GET('pass'),
						$data->__GET('email'),
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function sumar1($log)
	{
		try {

			$stm=$this->pdo->prepare("UPDATE estudiante SET  puntos_colaboracion = puntos_colaboracion + 1 WHERE login = :log");
			$stm->bindParam(':log',  $log);

			$stm->execute();

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function sumar5($log)
	{
		try {

			$stm=$this->pdo->prepare("UPDATE estudiante SET  puntos_colaboracion = puntos_colaboracion + 5 WHERE login = :log");
			$stm->bindParam(':log',  $log);

			$stm->execute();

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ordenar_estudiantes_puntuacion(){

		try {

			$stm=$this->pdo->prepare("SELECT login, ciudad, puntos_colaboracion FROM estudiante WHERE puntos_colaboracion > 0 ORDER BY puntos_colaboracion");
			$stm->execute();
			foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
				$alm = new Estudiante();
				$alm->estudiante_ranking($r->login,$r->ciudad,$r->puntos_colaboracion);

				$result[] = $alm;
			}

			return $result;

		} catch (Exception $e) {
			die($e->getMessage());
		}



	}

	public function ObtenerIdPorLogin($login)
	{
		try {
			$stm = $this->pdo->prepare('SELECT imagen_src FROM estudiante WHERE login = ?');

			$stm->execute(array($login));
			$r = $stm->fetch(PDO::FETCH_OBJ);
			if(!empty($r)) {
				$alm = new Estudiante();
				$alm->__SET('nombre', $r->nombre);
				$alm->__SET('apellidos', $r->apellidos);
				$alm->__SET('login', $r->login);
				$alm->__SET('pass', $r->pass);
				$alm->__SET('email', $r->email);
				$alm->__SET('pais', $r->pais);
				$alm->__SET('ciudad', $r->ciudad);
				$alm->__SET('centro', $r->centro);
				$alm->__SET('media', $r->media);
				$alm->__SET('fecha_reg', $r->fecha_reg);
				$alm->__SET('pts', $r->puntos_colaboracion);


				return $alm;
			}else{
				$stm = $this->pdo->prepare('SELECT * FROM gerente WHERE dni = ?');
				$stm->execute(array($login));
				$r = $stm->fetch(PDO::FETCH_OBJ);
				$alm = new Gerente();
				$alm->__SET('id_empresa', $r->id_empresa);
				$alm->__SET('dni', $r->dni);
				$alm->__SET('email', $r->email);
				$alm->__SET('telefono', $r->telefono);
				$alm->__SET('login', $r->login);
				$alm->__SET('pass', $r->pass);
				$alm->__SET('fecha_reg', $r->fecha_reg);

				return $alm;
			}
		} catch (Exception $e) {
			die($e->getMessage());
		}


	}

	public function subir_ruta($ruta,$log)
	{
		try {
			$stm=$this->pdo->prepare("UPDATE estudiante SET  imagen_src = :imagen WHERE login = :log");
			$stm->bindParam(':imagen',  $ruta);
			$stm->bindParam(':log',  $log);

			$stm->execute();

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

}