<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="demo/templates/bootstrap-3.3.6-dist/css/estilos.css" media="screen" />



</head>
{include file="../templates/header_empresa.tpl" title=foo}

<body>


<div class="container  container_fater">
    <div class="jumbotron">
        <table class="table table-responsive" id="example">
            <thead class="thead-inverse">
            <tr>
                <th>Top</th>
                <th>Nombre</th>
                <th>Localidad</th>
                <th>Url</th>
                <th>Votos</th>
                <th>Puntos</th>

            </tr>
            </thead>
            <tbody>{foreach $empresas as $indice=>$r}
                <tr>
                    <th scope="row">{($indice+1)+($pagina*20)}</th>
                    <td><a href="resume_{$r->id}">{$r->nombre}</a> </td>
                    <td><a href="location_{$r->localidad}">{$r->localidad}</a></td>
                    <td><a href={$r->url}>{$r->url}</a> </td>
                    <td align="center">{$r->votos}</td>
                    <td align="center">{$r->puntos}</td>
                </tr> {/foreach}
            </tbody>
        </table>
        <div align="center">
            <nav>
                <ul class="pagination">

                    {if $pagina gt 0}
                        <li>
                            <a href="ranking-0">
                                <span aria-hidden="true">First</span>
                            </a>
                        </li>
                        <li>
                            <a href="ranking-{$pagina-1}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        <li><a href="ranking-{$pagina-1}">{$pagina}</a></li>
                    {/if}
                    <li class="active"><a href="ranking-{$pagina}">{$pagina+1}</a></li>
                    {if $pagina+2 lt $pag}
                        <li><a href="ranking-{$pagina+1}">{$pagina+2}</a></li>

                        <li>
                            <a href="ranking-{$pagina+1}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="ranking-{$pag-2}">
                                <span aria-hidden="true">Last</span>
                            </a>
                        </li>
                    {/if}

                </ul>
            </nav>
        </div>
    </div>
</div>
</body>

</html>

