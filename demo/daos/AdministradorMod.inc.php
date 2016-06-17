<?php
include_once("../entities/Administrador.inc.php");

class AdministradorMod
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

            $stm = $this->pdo->prepare("SELECT * FROM administrador");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Administrador();
				

                $alm->__SET('nombre', $r->nombre);
                $alm->__SET('apellido1', $r->apellido1);
                $alm->__SET('apellido2', $r->apellido2);
                $alm->__SET('dni', $r->dni);
				$alm->__SET('fecha_nac', $r->fecha_nac);
                $alm->__SET('email', $r->email);
                $alm->__SET('pass', $r->pass);
                $alm->__SET('fecha_reg', $r->fecha_reg);

							
                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($dni)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM administrador WHERE dni = ?");
                      

            $stm->execute(array($dni));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            	$alm = new Administrador();

                $alm->__SET('nombre', $r->nombre);
                $alm->__SET('apellido1', $r->apellido1);
                $alm->__SET('apellido2', $r->apellido2);
                $alm->__SET('dni', $r->dni);
				$alm->__SET('fecha_nac', $r->fecha_nac);
                $alm->__SET('email', $r->email);
                $alm->__SET('pass', $r->pass);
                $alm->__SET('fecha_reg', $r->fecha_reg);
				
            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($dni)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM administrador WHERE dni = ?");                      

            $stm->execute(array($dni));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(Administrador $data)
    {
        try 
        {
            $sql = "UPDATE administrador SET 
                        nombre        = ?, 
                        apellido1  	= ?,
                        apellido2       = ?,
						dni        = ?, 
                        fecha_nac  	= ?,
                        email        = ?, 
                        pass  	= ?

                       
						
                    WHERE dni = ?";


            $this->pdo->prepare($sql)
                 ->execute(
                array(
                
                $data->__GET('nombre'),
                $data->__GET('apellido1'),
                $data->__GET('apellido2'),
                $data->__GET('dni'),
                $data->__GET('fecha_nac'),
                $data->__GET('email'),
                $data->__GET('pass')                   )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Administrador $data)
    {
        try 
        {
        $sql = "INSERT INTO administrador (nombre,apellido1,apellido2,dni,fecha_nac,email,pass) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $data->__GET('nombre'),
                $data->__GET('apellido1'),
                $data->__GET('apellido2'),
                $data->__GET('dni'),
				$data->__GET('fecha_nac'),
                $data->__GET('email'),
                $data->__GET('pass'),
                $data->__GET('fecha_reg')


                )
            );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}
?>