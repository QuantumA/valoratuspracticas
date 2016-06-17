<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="demo/templates/bootstrap-3.3.6-dist/css/estilos.css" media="screen" />
</head>
{include file="../templates/header_estudiante.tpl" title=foo}

<body>


<div class="container  container_fater">
    <div class="jumbotron">
        <table class="table table-responsive">
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
            <tbody>{foreach $empresaPorLocalidad as $r}
                <tr>
                    <th scope="row">{$r->id}</th>
                    <td><a href="resume_{$r->id}">{$r->nombre}</a> </td>
                    <td><a href="location_{$r->localidad}">{$r->localidad}</a></td>
                    <td><a href={$r->url}>{$r->url}</a> </td>
                    <td align="center">{$r->votos}</td>
                    <td align="center">{$r->puntos}</td>
                </tr> {/foreach}
            </tbody>
        </table>
    </div>
</div>
</body>

</html>

