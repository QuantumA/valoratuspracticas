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
{include file="../templates/header_estudiante.tpl" title=foo}

<body>


<div class="container container_fater">
    <div class="jumbotron">
        <table class="table table-responsive" id="example">
            <thead class="thead-inverse">
            <tr>
                <th>Top</th>
                <th align="center">Nombre</th>
                <th align="center">Localidad</th>
                <th align="center">Puntos</th>
            </tr>
            </thead>
            <tbody>{foreach $rank as $indice=>$r}
                <tr>
                    <th scope="row">{($indice+1)+($pagina*20)}</th>
                    <td >{$r->login}</td>
                    <td >{$r->ciudad}</td>
                    <td >{$r->pts}</td>
                </tr> {/foreach}
            </tbody>
        </table>

</div>
</body>
{include file="../templates/footer.tpl"}
</html>

