<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="demo/templates/bootstrap-3.3.6-dist/css/estilos.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="demo/templates/bootstrap-3.3.6-dist/css/bootstrap.min.css" media="screen" />
    <!-- CSSMap STYLESHEET - SPAIN -->
    <link rel="stylesheet" type="text/css" href="demo/templates/cssmap-spain/cssmap-spain/cssmap-spain.css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 20px;
        }
    </style>
  </head>
{include file="../templates/header.tpl" title=foo}
<body>

<div class="container" style="width:100%;padding-left: 0px;padding-right: 0px">
    <div class="container-fluid col-lg-12">
        <div class="row img-back-index">
            <div class="col-xs-8">
                <div class="jumbotron text-sup" style="background-color: rgba(80, 230, 53, 0)">
                    <h2 style="font-size: 46px;color: #dbdbdb">Valorar para mejorar</h2>
                </div>
                <div class="jumbotron text-inf" style="background-color: rgba(80, 230, 53, 0)">
                    <h2 style="font-size: 36px;color: #dbdbdb">La idea de evaluar para la mejora de algo...</h2>
                </div>
            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <div class="col-xs-3">
                    <form role="form" action="registrarse" method="post">
                        <div class="form-group" style="margin-top:90px">
                            <label for="exampleInputEmail1">
                            </label>
                            <input class="form-control" name="login"  type="text" placeholder="Introduce un login"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">
                            </label>
                            <input class="form-control" name="email"  type="email" placeholder="Correo Electronico"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">
                            </label>
                            <input class="form-control" name="pass" type="password" placeholder="Elige una contraseña"/>
                        </div>
                        <div class="form-group"> <button type="submit" class="btn btn-primary btn-block">Registrarse</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container col-lg-12">
    <div class="col-lg-7" style="height: auto">
    <!-- CSSMap - Spain -->
    <div id="map-spain">
        <ul class="spain">
            <li class="es1"><a href="index.php?peticion=location&recurso=ALAVA">Álava</a></li>
            <li class="es2"><a href="index.php?peticion=location&recurso=albacete">Albacete</a></li>
            <li class="es3"><a href="index.php?peticion=location&recurso=alicante">Alicante</a></li>
            <li class="es4"><a href="index.php?peticion=location&recurso=almeria">Almería</a></li>
            <li class="es5"><a href="index.php?peticion=location&recurso=asturias">Asturias</a></li>
            <li class="es6"><a href="index.php?peticion=location&recurso=avila">Ávila</a></li>
            <li class="es7"><a href="index.php?peticion=location&recurso=badajoz">Badajoz</a></li>
            <li class="es8"><a href="index.php?peticion=location&recurso=barcelona">Barcelona</a></li>
            <li class="es9"><a href="index.php?peticion=location&recurso=burgos">Burgos</a></li>
            <li class="es10"><a href="index.php?peticion=location&recurso=caceres">Cáceres</a></li>
            <li class="es11"><a href="index.php?peticion=location&recurso=cadiz">Cádiz</a></li>
            <li class="es12"><a href="index.php?peticion=location&recurso=cantabria">Cantabria</a></li>
            <li class="es13"><a href="index.php?peticion=location&recurso=castellon">Castellón</a></li>
            <li class="es14"><a href="index.php?peticion=location&recurso=ciudad%20real">Ciudad Real</a></li>
            <li class="es15"><a href="index.php?peticion=location&recurso=cordoba">Córdoba</a></li>
            <li class="es16"><a href="index.php?peticion=location&recurso=a%20coruña">a Coruña</a></li>
            <li class="es17"><a href="index.php?peticion=location&recurso=cuenca">Cuenca</a></li>
            <li class="es18"><a href="index.php?peticion=location&recurso=gerona">Gerona</a></li>
            <li class="es19"><a href="index.php?peticion=location&recurso=granada">Granada</a></li>
            <li class="es20"><a href="index.php?peticion=location&recurso=guadalajara">Guadalajara</a></li>
            <li class="es21"><a href="index.php?peticion=location&recurso=guipuzcoa">Guipúzcoa</a></li>
            <li class="es22"><a href="index.php?peticion=location&recurso=huelva">Huelva</a></li>
            <li class="es23"><a href="index.php?peticion=location&recurso=huesca">Huesca</a></li>
            <li class="es24"><a href="index.php?peticion=location&recurso=islas%20baleares" class="tooltip-middle">Islas Baleares</a></li>
            <li class="es25"><a href="index.php?peticion=location&recurso=jaen">Jaén</a></li>
            <li class="es26"><a href="index.php?peticion=location&recurso=leon">León</a></li>
            <li class="es27"><a href="index.php?peticion=location&recurso=lerida">Lérida</a></li>
            <li class="es28"><a href="index.php?peticion=location&recurso=lugo">Lugo</a></li>
            <li class="es29"><a href="location_MADRID">Madrid</a></li>
            <li class="es30"><a href="index.php?peticion=location&recurso=malaga">Málaga</a></li>
            <li class="es31"><a href="index.php?peticion=location&recurso=murcia">Murcia</a></li>
            <li class="es32"><a href="index.php?peticion=location&recurso=navarra">Navarra</a></li>
            <li class="es33"><a href="index.php?peticion=location&recurso=orense">Orense</a></li>
            <li class="es34"><a href="index.php?peticion=location&recurso=palencia">Palencia</a></li>
            <li class="es35"><a href="index.php?peticion=location&recurso=las%20palmas%20de%20gran%20canaria" class="tooltip-middle">Las Palmas</a></li>
            <li class="es36"><a href="index.php?peticion=location&recurso=pontevedra">Pontevedra</a></li>
            <li class="es37"><a href="index.php?peticion=location&recurso=la%20rioja">La Rioja</a></li>
            <li class="es38"><a href="index.php?peticion=location&recurso=salamanca">Salamanca</a></li>
            <li class="es39"><a href="index.php?peticion=location&recurso=santa%20cruz%20de%20tenerife" class="tooltip-middle">Santa Cruz de Tenerife</a></li>
            <li class="es40"><a href="index.php?peticion=location&recurso=segovia">Segovia</a></li>
            <li class="es41"><a href="index.php?peticion=location&recurso=sevilla">Sevilla</a></li>
            <li class="es42"><a href="index.php?peticion=location&recurso=soria">Soria</a></li>
            <li class="es43"><a href="index.php?peticion=location&recurso=tarragona">Tarragona</a></li>
            <li class="es44"><a href="index.php?peticion=location&recurso=teruel">Teruel</a></li>
            <li class="es45"><a href="index.php?peticion=location&recurso=toledo">Toledo</a></li>
            <li class="es46"><a href="index.php?peticion=location&recurso=valencia">Valencia</a></li>
            <li class="es47"><a href="index.php?peticion=location&recurso=valladolid">Valladolid</a></li>
            <li class="es48"><a href="index.php?peticion=location&recurso=vizcaya">Vizcaya</a></li>
            <li class="es49"><a href="index.php?peticion=location&recurso=zamora">Zamora</a></li>
            <li class="es50"><a href="index.php?peticion=location&recurso=zaragoza">Zaragoza</a></li>
            <li class="es51"><a href="index.php?peticion=location&recurso=ceuta">Ceuta</a></li>
            <li class="es52"><a href="index.php?peticion=location&recurso=melilla">Melilla</a></li>
        </ul>
    </div>
    <!-- END OF THE CSSMap - Spain -->
    </div>
    <div class="jumbotron col-lg-5" style="height: auto">
        <table class="table table-striped table-hover table-condensed">
            <thead>
            <tr>
                <th>Top</th>
                <th>Nombre</th>
                <th>Localidad</th>
            </tr>
            </thead>
            {foreach $empresas as $indice=>$r}
                <tr>
                    <td>{$indice+1}</td>
                    <td><a href="resume_{$r->id}">{$r->nombre}</td>
                    <td><a href="location_{$r->localidad}">{$r->localidad}</td>
                </tr>
            {/foreach}

        </table>

    </div>

</div>

<div class="container col-lg-12">
    <div class="col-lg-3">
        <img class="img-circle img-index" src="demo/utils/Icono_FP.png" alt="Generic placeholder image" width="140" height="140">
        <h2 class="lft-col-index">Formación Profesional</h2>
        <p class="lft-col-index">Queremos que se valore adecuadamente a técnicos y técnicos superiores y, que su papel en las

            prácticas sea el de su formación mediante la enseñanza</p>

    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3">
        <img class="img-circle img-index" src="demo/utils/libros-de-universidad_23-2147503079.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2>Formación Universitaria:</h2>
        <p>Nuestra meta es que exista un enlace más fuerte entre la universidad y la empresa, que mediante
            las valoraciones se pueda comprender que esperaba la empresa y el alumno.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3">
        <img class="img-circle img-index" src="demo/utils/icono-empresas.png" alt="Generic placeholder image" width="140" height="140">
        <h2>Empresas:</h2>
        <p> Esta plataforma ayudará a todas las empresas a desarrollar una formación mejor mediante la
            experiencia, gracias a entender con una mayor perspectiva el mercado laboral de prácticas.</p>
    </div>
    <div class="col-lg-3">
        <img class="img-circle img-index" src="demo/utils/review_icono.png" alt="Generic placeholder image" width="140" height="140">
        <h2>Valoraciones:</h2>
        <p> Las opiniones deberán reflejar de la manera más precisa la experiencia real de las prácticas. Las
            posibles críticas serán constructivas, para que las empresas entiendas cómo pueden mejorar.</p>
    </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

</div>
<!-- jQuery -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<!-- CSSMap SCRIPT -->
<script type="text/javascript" src="//cssmapsplugin.com/5/jquery.cssmap.min.js"></script>

    <script type="text/javascript">
            $(document).ready(function(){

// CSSMap;
                $("#map-spain").CSSMap({
                    "size": 750,
                    "tooltips": "floating-top-left",
                    "responsive": "auto"
                });
// END OF THE CSSMap;

            });
</script>


</body>
</html>

