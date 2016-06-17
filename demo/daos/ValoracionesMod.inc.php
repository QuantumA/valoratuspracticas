<?php
include_once("../entities/Valoraciones.inc.php");

class ValoracionesMod
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

            $stm = $this->pdo->prepare("SELECT * FROM valoraciones");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Valoraciones();

                $alm->__SET('id_valoracion', $r->id_valoracion);
                $alm->__SET('login', $r->login);
                $alm->__SET('id_empresa', $r->id_empresa);
                $alm->__SET('titulo', $r->comentario);
	            $alm->__SET('comentario', $r->comentario);
	            $alm->__SET('pregunta1', $r->pregunta1);
	            $alm->__SET('pregunta2', $r->pregunta2);
	            $alm->__SET('pregunta3', $r->pregunta3);
	            $alm->__SET('pregunta4', $r->pregunta4);
	            $alm->__SET('pregunta5', $r->pregunta5);
	            $alm->__SET('pregunta6', $r->pregunta6);
	            $alm->__SET('pregunta7', $r->pregunta7);
	            $alm->__SET('pregunta8', $r->pregunta8);

                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

	public function ListarPorId($id)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM valoraciones WHERE login = ?");
			$stm->execute(array($id));

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Valoraciones();

				$alm->__SET('id_valoracion', $r->id_valoracion);
				$alm->__SET('login', $r->login);
				$alm->__SET('id_empresa', $r->id_empresa);
				$alm->__SET('titulo', $r->titulo);
				$alm->__SET('comentario', $r->comentario);
				$alm->__SET('pregunta1', $r->pregunta1);
				$alm->__SET('pregunta2', $r->pregunta2);
				$alm->__SET('pregunta3', $r->pregunta3);
				$alm->__SET('pregunta4', $r->pregunta4);
				$alm->__SET('pregunta5', $r->pregunta5);
				$alm->__SET('pregunta6', $r->pregunta6);
				$alm->__SET('pregunta7', $r->pregunta7);
				$alm->__SET('pregunta8', $r->pregunta8);

				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function listar3ultimas()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM valoraciones ORDER BY fecha DESC LIMIT 3");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Valoraciones();

				$alm->__SET('id_valoracion', $r->id_valoracion);
				$alm->__SET('login', $r->login);
				$alm->__SET('id_empresa', $r->id_empresa);
				$alm->__SET('titulo', $r->titulo);
				$alm->__SET('comentario', $r->comentario);
				$alm->__SET('pregunta1', $r->pregunta1);
				$alm->__SET('pregunta2', $r->pregunta2);
				$alm->__SET('pregunta3', $r->pregunta3);
				$alm->__SET('pregunta4', $r->pregunta4);
				$alm->__SET('pregunta5', $r->pregunta5);
				$alm->__SET('pregunta6', $r->pregunta6);
				$alm->__SET('pregunta7', $r->pregunta7);
				$alm->__SET('pregunta8', $r->pregunta8);
				$alm->__SET('fecha', $r->fecha);


				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    /*public function Obtener($id_emrpesa, $titulo)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM practicas WHERE id_practicas = ?");
                      

            $stm->execute(array($id_practicas));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            	$alm = new practicas();

                $alm->__SET('id_empresa', $r->id_empresa);
                $alm->__SET('id_practicas', $r->id_practicas);				
                $alm->__SET('titulo', $r->titulo);
                $alm->__SET('estudios_min', $r->estudios_min);
                $alm->__SET('descripcion', $r->descripcion);
                $alm->__SET('salario', $r->salario);
                $alm->__SET('nota_minima', $r->nota_minima);
                $alm->__SET('provincia', $r->provincia);
                $alm->__SET('fecha_ini', $r->fecha_ini);
                $alm->__SET('fecha_fin', $r->fecha_fin);
				
            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
	*/
	
	

    public function Eliminar($id_valoracion)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM valoraciones WHERE id_valoracion = ?");                      

            $stm->execute(array($id_valoracion));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

  

    public function Registrar(Valoraciones $data)

    {
        try 
        {
        $sql = "INSERT INTO valoraciones (login,id_empresa,titulo,comentario,pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,pregunta6,pregunta7,pregunta8)
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";


        $this->pdo->prepare($sql)
             ->execute(
            array(
                $data->__GET('login'),
                $data->__GET('id_empresa'),
                $data->__GET('titulo'),
	            $data->__GET('comentario'),
	            $data->__GET('pregunta1'),
	            $data->__GET('pregunta2'),
	            $data->__GET('pregunta3'),
	            $data->__GET('pregunta4'),
	            $data->__GET('pregunta5'),
	            $data->__GET('pregunta6'),
	            $data->__GET('pregunta7'),
	            $data->__GET('pregunta8')
                )
            );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function ObtenerConUser($id_empresa)
    {
        try
        {
            $result= Array();
            $stm = $this->pdo
                ->prepare("SELECT e.login, e.email, e.ciudad, e.centro, e.media,v.id_empresa,v.comentario,v.fecha,v.id_valoracion,v.titulo,
v.pregunta1,
v.pregunta2,
v.pregunta3,
v.pregunta4,
v.pregunta5,
v.pregunta6,
v.pregunta7,
v.pregunta8
FROM estudiante AS e
INNER JOIN valoraciones v ON v.login = e.login WHERE v.id_empresa = ?");


            $stm->execute(array($id_empresa));
           foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r){

               $result[] = $r;

           }


            return $result;
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

	public function contar_valoraciones($log)
	{
		try {

			$stm=$this->pdo
				->prepare("SELECT count(*) FROM valoraciones WHERE login = :log");
			$stm->bindParam(':log',  $log);

			$stm->execute();

			return $stm->fetchColumn();

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function no_repetir_valoraciones($log,$id_empresa){

		try {

			$stm=$this->pdo
				->prepare("SELECT id_empresa FROM valoraciones WHERE login = :log");
			$stm->bindParam(':log',  $log);

			$stm->execute();

			return self::comprobar_valoradas($stm->fetchAll(),$id_empresa);

		} catch (Exception $e) {
			die($e->getMessage());
		}


}


	public function comprobar_valoradas($lista,$id_empresa){
		$count=0;

		foreach ($lista as $r){
			if($r["id_empresa"] == $id_empresa)$count++;
		}
		if($count>0) return true;
		else return false;

	}



}
?>