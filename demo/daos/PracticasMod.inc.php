<?php
include_once("../entities/Practicas.inc.php");

class PracticasMod
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

            $stm = $this->pdo->prepare("SELECT * FROM practicas");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Practicas();


	            $alm->__SET('id_empresa', $r->id_empresa);
	            $alm->__SET('id_practicas', $r->id_practicas);
	            $alm->__SET('titulo', $r->titulo);
	            $alm->__SET('estudios_min', $r->estudios_min);
	            $alm->__SET('descripcion', $r->descripcion);
	            $alm->__SET('salario', $r->salario);
	            $alm->__SET('nota_minima', $r->nota_minima);
	            $alm->__SET('provincia', $r->provincia);
	            $alm->__SET('duracion', $r->duracion);
                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($id_practicas)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM practicas WHERE id_practica = ?");
                      

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
	        $alm->__SET('duracion', $r->duracion);
				
            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }


	
	public function ObtenerPorEmpresa($id_empresa)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM practicas WHERE id_empresa = ?");
                      

            $stm->execute(array($id_empresa));

	        foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
	        {
		        $alm = new Practicas();


		        $alm->__SET('id_empresa', $r->id_empresa);
		        $alm->__SET('id_practica', $r->id_practica);
		        $alm->__SET('titulo', $r->titulo);
		        $alm->__SET('estudios_min', $r->estudios_min);
		        $alm->__SET('descripcion', $r->descripcion);
		        $alm->__SET('salario', $r->salario);
		        $alm->__SET('nota_minima', $r->nota_minima);
		        $alm->__SET('provincia', $r->provincia);
		        $alm->__SET('duracion', $r->duracion);

		        $result[] = $alm;
	        }

	        return $result;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_practicas)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM practicas WHERE id_practicas = ?");                      

            $stm->execute(array($id_practicas));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(Practicas $alm)
    {
        try 
        {
            $sql = "UPDATE practicas SET 
						
						titulo 				=?,
						estudios_min        = ?, 
                        descripcion 		= ?,
                        salario        = ?, 
                        nota_minima  	= ?,
						provincia        = ?,
                        duracion        = ?

                       
						
                    WHERE id_practicas = ?";
					

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                
                $alm->__GET('id_practicas'),
                $alm->__GET('titulo'),
                $alm->__GET('estudios_min'),
                $alm->__GET('descripcion'),
                $alm->__GET('salario'),
                $alm->__GET('nota_minima'),
                $alm->__GET('provincia'),
                $alm->__GET('duracion'),
                $alm->__GET('id_practicas')				
				
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Practicas $alm)
    {
        try 
        {
        $sql = "INSERT INTO practicas (id_empresa,titulo,estudios_min,descripcion,salario,nota_minima,provincia,duracion)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $alm->__GET('id_empresa'),
                $alm->__GET('titulo'),
                $alm->__GET('estudios_min'),
                $alm->__GET('descripcion'),
                $alm->__GET('salario'),
                $alm->__GET('nota_minima'),
                $alm->__GET('provincia'),				
                $alm->__GET('duracion')
                )
            );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }



}
?>