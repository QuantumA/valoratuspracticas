<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="demo/js/jquery-2.2.3.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <link href="demo/templates/bootstrap-star-rating-master/css/star-rating.css" media="all" rel="stylesheet" type="text/css" />

    <!-- optionally if you need to use a theme, then include the theme file as mentioned below -->
    <link href="demo/templates/bootstrap-star-rating-master/css/theme-krajee-svg.css" media="all" rel="stylesheet" type="text/css" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.js"></script>
    <script src="demo/templates/bootstrap-star-rating-master/js/star-rating.js" type="text/javascript"></script>

    <!-- optionally if you need translation for your language then include locale file as mentioned below -->
    <script src="demo/templates/bootstrap-star-rating-master/js/star-rating_locale_es.js"></script>
    <script>// initialize with defaults
        $("#input-id").rating();
    </script>
</head>
{include file="../templates/header_estudiante.tpl" title=foo}
<body style="margin-top: 50px; ">

<div class="col-md-1"></div>
<div class="col-md-8">
    <div><h1>{$empresaPorId->nombre}</h1></div>
    <div>Localidad : {$empresaPorId->localidad}</div>
    <div>Sector : {$empresaPorId->sector}</div>
    <div>Url : {$empresaPorId->url}</div>
    <div>Direccion : {$empresaPorId->direccion}</div>
    <div>Telefono : {$empresaPorId->telefono}</div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success btn-small" data-toggle="modal" data-target="#myModal">
        {$practicasEmpresa} candidaturas activas
    </button>

</div>

<div class="col-md-3">
    <div><h1>Media : {math equation="(y * 2)/ x " x=$empresaPorId->votos y=$empresaPorId->puntos format="%.2f"}</h1></div>
    <div>Votos : {$empresaPorId->votos}</div>
    {include file=$boton}
    </div>
<!---MODAL DE VALORACIONES--->



<!--- FIN MODAL DE VALORACIONES--->

<div class="col-md-1">



</div>


<div class="container-fluid">
    {$turns = 0}
    {foreach $valoraciones as $v}
    <div class="container">
<div class="col-lg-12">
        <div class="col-md-2" style="
    padding-top: 10px;
">
            <ul style="list-style-type:none" >
                <li>{$v->login}</li>
                <li>{$v->fecha|truncate:10:""}</li>
                <li>{$v->ciudad}</li>
            </ul>
        </div>
        <div class="col-md-10">
            <h4>
               "{$v->titulo}"
            </h4>
            <p>
                {$v->comentario}
            </p>
            <div class="row">
                <div class="col-md-9">
                    <a  class="openModal"  onclick="mostrarPosicion({$turns})" class="btn" data-id="{$turns}" data-toggle="modal" data-target="#myModal_{$turns}" >Ver detalles</a>
                </div>
                <div class="col-md-2">

                    <button type="button" class="btn btn-block btn-sm btn-danger">
                        Reportar
                    </button>
                </div>

                </div> <hr style="border-top: 1px solid #C7C7C7;"/>
            </div>

        </div>
    </div>
    </div>

        <div id="myModal_{$turns}" class="modal fade" role="dialog">
            <div class="modal-dialog">
                {$valoracion= aux}
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                    <ul>
                        <li>Relacion estudio/practicas: {$v->pregunta1}</li>
                        <li>Nivel de satisfacion: {$v->pregunta2}</li>
                        <li>Formacion recibida: {$v->pregunta3}</li>
                        <li>Ambiente del departamento: {$v->pregunta4}</li>
                        <li>Remuneracion: {$v->pregunta5}</li>
                        <li>Horario: {$v->pregunta6}</li>
                        <li>Posibilidad de contrato: {$v->pregunta7}</li>
                        <li>Valoracion general: {$v->pregunta8}</li>
                    </ul>

                        <div class="ec-stars-wrapper">
                            <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                            <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                            <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                            <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                            <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        {$turns=$turns+1}
    {/foreach}
</div>

<div id="responsive" class="modal fade" tabindex="-1" data-width="760"  style="display: none; height:480px;width: 760px; left: 40%">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <h4 class="modal-title">Responsive</h4>
    </div>
    <form action="enviar_valoracion" method="POST" >
    <div class="modal-body">
        <div class="container">
            <input type="hidden" value="{$usuario->login}" name="login"/>
            <input type="hidden" value="{$empresaPorId->id}" name="empresa_id"/>
            <p>Relacion estudios - prácticas</p>
            <input id="input-id" type="text" class="rating" data-size="sm" name="uno"><br>
            <p>Satisfacion en las actividades realizadas</p>
            <input id="input-id" type="text" class="rating" data-size="sm" name="dos"><br>
            <p>Recibí una formacion profesional adecuada</p>
            <input id="input-id" type="text" class="rating" data-size="sm" name="tres"><br>
            <p>Ambiente en el departamento</p>
            <input id="input-id" type="text" class="rating" data-size="sm" name="cuatro"><br>
            <p>remuneracion</p>
            <input id="input-id" type="text" class="rating" data-size="sm" name="cinco"><br>
            <p>Flexibilidad en el horario</p>
            <input id="input-id" type="text" class="rating" data-size="sm" name="seis"><br>
            <p>Posibilidad de contrato</p>
            <input id="input-id" type="text" class="rating" data-size="sm" name="siete"><br>
            <p>Valoracion general</p>
            <input id="input-id" type="text" class="rating" data-size="sm" name="ocho"><br>
            <hr style="border-bottom: 1px; color: #2b542c">
            <input type="text" name="titulo" placeholder="Titulo"/><br/>
            <textarea class="form-control" rows="5" id="comment" placeholder="Pequeño resumen de tus practicas" style="width: 550px" name="comentario"></textarea><br>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
    </form>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:600px">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">ofertas {$empresaPorId->nombre}</h4>
            </div>
            <div class="modal-body">
                <ul>
                    {foreach $practicas as $r}
                        <li><a href="practica-{$r->id_practica}" >{$r->titulo}</a></li>
                    {/foreach}

                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>





<style type="text/css">

/*modal*/
    body.modal-open,
    .modal-open .navbar-fixed-top,
    .modal-open .navbar-fixed-bottom {
        margin-right: 0;
    }

    .modal {
        left: 50%;
        bottom: auto;
        right: auto;
        z-index: 1050;
        padding: 0;
        width: 500px;
        margin-left: -250px;
        background-color: #ffffff;
        border: 1px solid #999999;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 6px;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
        background-clip: padding-box;
    }

    .modal.container {
        max-width: none;
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
    }
</style>

