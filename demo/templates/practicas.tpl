<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="demo/templates/bootstrap-3.3.6-dist/css/estilos.css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
{include file="../templates/header_estudiante.tpl" title=foo}
<body>


<div class="container container_fater">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">{$empresaPorId->nombre}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class=" col-md-9 col-lg-6 ">
                            <table class="table table-user-information">
                                <thead>
                                <tr>
                                    <h4>Información de las prácticas</h4>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Titulo:</td>
                                    <td>{$empresaPorId->titulo}</td>
                                </tr>
                                <tr>
                                    <td>Estudios</td>
                                    <td>{$empresaPorId->estudios_min}</td>
                                </tr>
                                <tr>
                                    <td>Salario</td>
                                    <td>{$empresaPorId->salario}</td>
                                </tr>


                                <tr>
                                    <td>Nota de corte</td>
                                    <td>{$empresaPorId->nota_minima}</td>
                                </tr>
                                <tr>
                                    <td>Provincia</td>
                                    <td>{$empresaPorId->provincia}</td>
                                </tr>
                                <tr>
                                    <td>Duración</td>
                                    <td>{$empresaPorId->duracion}</td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                        <div class=" col-md-9 col-lg-6 ">
                            <table class="table table-user-information">
                                <thead>
                                <tr>
                                    <h4>Informacion de la empresa</h4>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Sede</td>
                                    <td>{$empresaPorId->localidad}</td>
                                </tr>
                                <tr>
                                    <td>Sector</td>
                                    <td>{$empresaPorId->sector}</td>
                                </tr>
                                <tr>
                                    <td>Telefono</td>
                                    <td>{$empresaPorId->telefono}</td>
                                </tr>

                                <tr>
                                    <td>Objeto social</td>
                                    <td>{$empresaPorId->objeto_so}</td>
                                </tr>
                                <tr>
                                    <td>Url</td>
                                    <td>{$empresaPorId->url}</td>
                                </tr>


                                </tbody>
                            </table>

                        </div>


                    </div>
                    <div style="    border-top: 1px solid #DDD;">
                        Descripcion: {$empresaPorId->descripcion}
                    </div>
                </div>
                <form action="alta_candidatura" method="post">
                <div class="panel-footer">
                    <input type="text" class="hidden" name="id" value="{$empresaPorId->id_practica}">
                    <input type="text" class="hidden" name="lo" value="{$usuario->login}">
                    <input type="text" class="hidden" name="em" value="{$empresaPorId->id}">
                    <button type=submit class="btn btn-block btn-primary">Apuntarse</button>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
</body>
{include file="../templates/footer.tpl"}
</html>
