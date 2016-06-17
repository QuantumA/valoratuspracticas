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
{include file="../templates/header.tpl" title=foo}
<body style="margin-top: 50px; ">

<div class="col-md-1"></div>
<div class="col-md-8">
    <div><h1>{$empresaPorId->nombre}</h1></div>
    <div>Localidad : {$empresaPorId->localidad}</div>
    <div>Sector : {$empresaPorId->sector}</div>
    <div>Url : {$empresaPorId->url}</div>
    <div>Direccion : {$empresaPorId->direccion}</div>
    <div>Telefono : {$empresaPorId->telefono}</div>
    <div><a href="#">{$practicasEmpresa} ofertas de practicas activas</a> </div>
</div>

<div class="col-md-3">
    <div><h1>Media : {math equation="(y * 2)/ x " x=$empresaPorId->votos y=$empresaPorId->puntos format="%.2f"}</h1></div>
    <div>Votos : {$empresaPorId->votos}</div>
   <a href="registro"><div style="padding-top: 12px"><button type="button" class="btn btn-primary" >Registrate para valorar</button></div></a>
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

