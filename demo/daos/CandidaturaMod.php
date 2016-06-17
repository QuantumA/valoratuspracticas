<?php
include_once("../entities/Candidatura.php");

class CandidaturaMod
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost; dbname=valoratuspracticas', 'usuario', 'usuario');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM Candidaturas");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Candidatura();


				$alm->__SET('id_candidatura', $r->id_candidatura);
				$alm->__SET('id_usuario', $r->usuario);
				$alm->__SET('id_practicas', $r->id_practica);
				$alm->__SET('id_empresa', $r->id_empresa);
				$alm->__SET('fecha_inicio', $r->fecha_solicitud);
				$alm->__SET('aceptada', $r->aceptada);


				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}public function ListarPorIdUsuario($id)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM candidaturas WHERE usuario = :id");
			$stm->bindValue(':id',"{$id}");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Candidatura();


				$alm->__SET('id_candidatura', $r->id_candidatura);
				$alm->__SET('id_usuario', $r->usuario);
				$alm->__SET('id_practicas', $r->id_practica);
				$alm->__SET('id_empresa', $r->id_empresa);
				$alm->__SET('fecha_inicio', $r->fecha_solicitud);
				$alm->__SET('aceptada', $r->aceptada);



				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Contar($id)
	{
		try
		{


			$stm = $this->pdo->prepare("SELECT count(*) FROM candidaturas where usuario = :id ");
			$stm->bindValue(':id',  $id);
			$stm->execute();

			return $stm->fetchColumn();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_candidatura)
	{
		try
		{
			$stm = $this->pdo
				->prepare("SELECT * FROM candidatura WHERE id_candidatura = ?");


			$stm->execute(array($id_candidatura));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new Candidatura();

			$alm->__SET('id_candidatura', $r->id_candidatura);
			$alm->__SET('id_usuario', $r->usuario);
			$alm->__SET('id_practicas', $r->id_practica);
			$alm->__SET('id_empresa', $r->id_empresa);
			$alm->__SET('fecha_inicio', $r->fecha_solicitud);
			$alm->__SET('aceptada', $r->aceptada);


			return $alm;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}





	public function Eliminar($id_candidatura)
	{
		try
		{
			$stm = $this->pdo
				->prepare("DELETE FROM candidaturas WHERE id_candidatura = ?");

			$stm->execute(array($id_candidatura));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Registrar(Candidatura $alm)
	{
		try
		{



			$sql = "INSERT INTO candidaturas (usuario,id_empresa,id_practica)
                VALUES (?, ?, ?)";

			$this->pdo->prepare($sql)->execute(array(
				$alm->id_usuario,
				$alm->id_empresa,
				$alm->id_practicas


			)

				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
?>