<?php
include_once("../entities/Empresa.inc.php");
include_once("../entities/Transformable.php");

class EmpresaMod
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

            $stm = $this->pdo->prepare("SELECT  `id`, `nombre`, `localidad`,`url`, `votos`,`puntos`, puntos/votos as media  from empresa order by puntos desc");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Empresa();

                $alm->__SET('id', $r->id);
                $alm->__SET('nombre', $r->nombre);
                $alm->__SET('localidad', $r->localidad);
                $alm->__SET('sector', $r->sector);
				$alm->__SET('direccion', $r->direccion);
                $alm->__SET('telefono', $r->telefono);
                $alm->__SET('objeto_so', $r->objeto_so);
                $alm->__SET('url', $r->url);
                $alm->__SET('votos', $r->votos);
                $alm->__SET('puntos', $r->puntos);
							
                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function ListarPorCiudad($localidad)
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT  `id`, `nombre`, `localidad`,`url`, `votos`,`puntos`, puntos/votos as media  from empresa WHERE localidad = ? order by puntos desc");
            $stm->execute(array($localidad));

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Empresa();

                $alm->__SET('id', $r->id);
                $alm->__SET('nombre', $r->nombre);
                $alm->__SET('localidad', $r->localidad);
                $alm->__SET('sector', $r->sector);
                $alm->__SET('direccion', $r->direccion);
                $alm->__SET('telefono', $r->telefono);
                $alm->__SET('objeto_so', $r->objeto_so);
                $alm->__SET('url', $r->url);
                $alm->__SET('votos', $r->votos);
                $alm->__SET('puntos', $r->puntos);

                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
	
	
	public function Listar15()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT  `id`, `nombre`, `localidad`,`url`, `votos`,`puntos`, puntos/votos as media  from empresa order by puntos desc LIMIT 15 ");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Empresa();

                $alm->__SET('id', $r->id);
                $alm->__SET('nombre', $r->nombre);
                $alm->__SET('localidad', $r->localidad);
                $alm->__SET('sector', $r->sector);
				$alm->__SET('direccion', $r->direccion);
                $alm->__SET('telefono', $r->telefono);
                $alm->__SET('objeto_so', $r->objeto_so);
                $alm->__SET('url', $r->url);
                $alm->__SET('votos', $r->votos);
                $alm->__SET('puntos', $r->puntos);
							
                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
	
	public function Listar20($pagina)
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT  `id`, `nombre`, `localidad`,`url`, `votos`,`puntos`, puntos/votos as media  from empresa order by puntos desc LIMIT ? , 20 ");
            $stm->bindParam(1,$pagina, PDO::PARAM_INT);
	        $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Empresa();

                $alm->__SET('id', $r->id);
                $alm->__SET('nombre', $r->nombre);
                $alm->__SET('localidad', $r->localidad);
                $alm->__SET('sector', $r->sector);
				$alm->__SET('direccion', $r->direccion);
                $alm->__SET('telefono', $r->telefono);
                $alm->__SET('objeto_so', $r->objeto_so);
                $alm->__SET('url', $r->url);
                $alm->__SET('votos', $r->votos);
                $alm->__SET('puntos', $r->puntos);
							
                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
	
	public function Listar30()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT  `id`, `nombre`, `localidad`,`url`, `votos`,`puntos`, puntos/votos as media  from empresa order by puntos desc LIMIT 30");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Empresa();

                $alm->__SET('id', $r->id);
                $alm->__SET('nombre', $r->nombre);
                $alm->__SET('localidad', $r->localidad);
                $alm->__SET('sector', $r->sector);
				$alm->__SET('direccion', $r->direccion);
                $alm->__SET('telefono', $r->telefono);
                $alm->__SET('objeto_so', $r->objeto_so);
                $alm->__SET('url', $r->url);
                $alm->__SET('votos', $r->votos);
                $alm->__SET('puntos', $r->puntos);
							
                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try
        {
                     $stm = $this->pdo
                      ->prepare("SELECT * FROM empresa WHERE id = ?");
                      

            $stm->execute(array($id));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            	$alm = new Empresa();

                $alm->__SET('id', $r->id);
                $alm->__SET('nombre', $r->nombre);
                $alm->__SET('localidad', $r->localidad);
                $alm->__SET('sector', $r->sector);
				$alm->__SET('direccion', $r->direccion);
                $alm->__SET('telefono', $r->telefono);
                $alm->__SET('objeto_so', $r->objeto_so);
                $alm->__SET('url', $r->url);
                $alm->__SET('votos', $r->votos);
                $alm->__SET('puntos', $r->puntos);

            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }public function practica_empresa($id)
    {
        try
        {

                     $stm = $this->pdo
                      ->prepare("select v.id_empresa, v.id_practica, v.titulo, v.estudios_min, v.descripcion, v.salario,
								v.nota_minima, v.provincia, v.duracion, e.id, e.nombre, e.localidad, e.sector, e.direccion,
								e.telefono, e.objeto_so, e.url, e.votos, e.puntos from empresa e , practicas v
								where v.id_empresa=e.id and v.id_practica = ?");


            $stm->execute(array($id));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            	$alm = new Transformable();

                $alm->__SET('id_empresa', $r->id_empresa);
                $alm->__SET('id_practica', $r->id_practica);
                $alm->__SET('titulo', $r->titulo);
                $alm->__SET('estudios_min', $r->estudios_min);
                $alm->__SET('descripcion', $r->descripcion);
				$alm->__SET('salario', $r->salario);
                $alm->__SET('nota_minima', $r->nota_minima);
                $alm->__SET('provincia', $r->provincia);
                $alm->__SET('duracion', $r->duracion);
                $alm->__SET('id', $r->id);
                $alm->__SET('nombre', $r->nombre);
                $alm->__SET('localidad', $r->localidad);
                $alm->__SET('sector', $r->sector);
                $alm->__SET('direccion', $r->direccion);
                $alm->__SET('telefono', $r->telefono);
				$alm->__SET('objeto_so', $r->objeto_so);
                $alm->__SET('url', $r->url);
                $alm->__SET('votos', $r->votos);
                $alm->__SET('puntos', $r->puntos);

            return $alm;
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM empresa WHERE id = ?");                      

            $stm->execute(array($id));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(Empresa $data)
    {
        try 
        {
            $sql = "UPDATE empresa SET 
                        nombre        = ?, 
                        localidad  	= ?,
                        sector       = ?,
						direccion        = ?, 
                        telefono  	= ?,
                        objeto_so        = ?, 
                        url  	= ?,
						votos = ?,
                       
						
                    WHERE id = ?";


            $this->pdo->prepare($sql)
                 ->execute(
                array(
                
                $data->__GET('id'),
                $data->__GET('nombre'),
                $data->__GET('localidad'),
                $data->__GET('sector'),
                $data->__GET('direccion'),
                $data->__GET('telefono'),
                $data->__GET('objeto_so'),
                $data->__GET('url'),
				$data->__GET('votos'),
                $data->__GET('puntos')
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Empresa $data)
    {
        try 
        {
        $sql = "INSERT INTO empresa (nombre,localidad,sector,direccion,telefono,objeto_so,url,votos,puntos)
                VALUES ( ?, ?, ?, ?, ?, ?, ?, 0, 0)";

        $this->pdo->prepare($sql)
             ->execute(
            array(

				$data->__GET('nombre'),
                $data->__GET('localidad'),
                $data->__GET('sector'),
				$data->__GET('direccion'),
                $data->__GET('telefono'),
                $data->__GET('objeto_so'),
                $data->__GET('url')


                )
            );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

	public function actualizaEstadisticas($id){

				self::registrarSumaVotos($id);
				self::registrarVotos($id);


	}

	protected function contarVotos($id){

		try
		{
			$stm = $this->pdo
				->prepare('SELECT count(pregunta8) FROM valoraciones WHERE id_empresa = ?');
			$stm->bindParam(1, $id);
			$stm->execute();
			$votos=$stm->fetchColumn(0);


			return $votos;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}


	}

	protected function sumarVotos($id){

		try
		{
			$stm = $this->pdo
				->prepare('SELECT sum(pregunta8) FROM valoraciones WHERE id_empresa = ?');
			$stm->bindParam(1, $id);
			$stm->execute();
			$suma=$stm->fetchColumn(0);
			return $suma;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}

	}


	protected function registrarVotos($id){

		$votos = self::contarVotos($id);

		try
		{
			$stm = $this->pdo->prepare('UPDATE empresa set votos = ? where id = ?');

			$stm->bindParam(1, $votos);
			$stm->bindParam(2, $id);

			$stm->execute();




		} catch (Exception $e)
		{
			die($e->getMessage());
		}

	}

	protected function registrarSumaVotos($id){
		$suma=self::sumarVotos($id);

		try
		{
			$stm = $this->pdo->prepare('UPDATE empresa set puntos = ? where id = ?');

			$stm->bindParam(1, $suma);
			$stm->bindParam(2, $id);

			$stm->execute();

		} catch (Exception $e)
		{
			die($e->getMessage());
		}

	}

	public function contar(){
		try
		{
			$stm = $this->pdo
				->prepare("SELECT COUNT(*) FROM empresa");

			$stm->execute();
			$result=$stm->fetchColumn(0);
			$result=$result/20;
			return ceil ($result+1);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}

	}

	public function dinamica($param){

		try
		{

			$stm = $this->pdo->prepare("SELECT id, nombre FROM empresa WHERE nombre LIKE :param LIMIT 10");
			$stm->bindValue(':param',  "%{$param}%");
			$stm->execute();


			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Empresa();
				$alm->Empresa_din($r->id,$r->nombre);
				$result[] = $alm;
			}
			return $result;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}

	}

	function contarPracticas($param){


		try
		{

			$stm = $this->pdo->prepare("SELECT count(*) FROM practicas WHERE id_empresa = :param ");
			$stm->bindValue(':param',  "{$param}");
			$stm->execute();

			return $stm->fetchColumn(0);

		} catch (Exception $e)
		{
			die($e->getMessage());
		}

	}


}
?>
