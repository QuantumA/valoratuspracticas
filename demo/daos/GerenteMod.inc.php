<?php
include_once("../entities/Gerente.inc.php");

class GerenteMod
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

            $stm = $this->pdo->prepare("SELECT * FROM gerente");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Gerente();


                $alm->__SET('id_empresa', $r->id_empresa);
                $alm->__SET('dni', $r->dni);
                $alm->__SET('email', $r->email);
				$alm->__SET('telefono', $r->telefono);
                $alm->__SET('login', $r->login);
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

    public function Obtener($login)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM gerente WHERE dni = ?");
                      

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
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($login)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM gerente WHERE login = ?");                      

            $stm->execute(array($login));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(Gerente $alm)
    {
        try 
        {
            $sql = "UPDATE gerente SET 
                        id_emrpesa        = ?, 
                        dni  	= ?,
						email        = ?, 
                        telefono  		= ?,
                        login        = ?, 
                        pass  	= ?				

                       
						
                    WHERE login = ?";


            $this->pdo->prepare($sql)
                 ->execute(
                array(
                
                $alm->__GET('id_empresa'),
                $alm->__GET('dni'),
                $alm->__GET('email'),
                $alm->__GET('telefono'),
                $alm->__GET('login'),
                $alm->__GET('pass')
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Gerente $alm)
    {
        try 
        {
        $sql = "INSERT INTO gerente (id_emrpesa,dni,email,telefono,login,pass) 
                VALUES (?, ?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $alm->__GET('id_empresa'),
                $alm->__GET('dni'),
                $alm->__GET('email'),
                $alm->__GET('telefono'),
                $alm->__GET('login'),
                $alm->__GET('pass')


                )
            );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}
?>