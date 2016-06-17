<?php /* Smarty version 3.1.27, created on 2016-06-15 13:51:55
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/empresa.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17226301555761415bed3731_56632847%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c71692564faf364c16bbf0ceb603ca8c0e376fd' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/empresa.tpl',
      1 => 1465990440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17226301555761415bed3731_56632847',
  'variables' => 
  array (
    'empresaPorId' => 0,
    'practicasEmpresa' => 0,
    'boton' => 0,
    'valoraciones' => 0,
    'v' => 0,
    'turns' => 0,
    'usuario' => 0,
    'practicas' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5761415c042751_33791513',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5761415c042751_33791513')) {
function content_5761415c042751_33791513 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/var/www/practicas/alvaro/vtp/libs/plugins/function.math.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/practicas/alvaro/vtp/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '17226301555761415bed3731_56632847';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="demo/js/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <link href="demo/templates/bootstrap-star-rating-master/css/star-rating.css" media="all" rel="stylesheet" type="text/css" />

    <!-- optionally if you need to use a theme, then include the theme file as mentioned below -->
    <link href="demo/templates/bootstrap-star-rating-master/css/theme-krajee-svg.css" media="all" rel="stylesheet" type="text/css" />

    <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="demo/templates/bootstrap-star-rating-master/js/star-rating.js" type="text/javascript"><?php echo '</script'; ?>
>

    <!-- optionally if you need translation for your language then include locale file as mentioned below -->
    <?php echo '<script'; ?>
 src="demo/templates/bootstrap-star-rating-master/js/star-rating_locale_es.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>// initialize with defaults
        $("#input-id").rating();
    <?php echo '</script'; ?>
>
</head>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/header_estudiante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>

<body style="margin-top: 50px; ">

<div class="col-md-1"></div>
<div class="col-md-8">
    <div><h1><?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->nombre;?>
</h1></div>
    <div>Localidad : <?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->localidad;?>
</div>
    <div>Sector : <?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->sector;?>
</div>
    <div>Url : <?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->url;?>
</div>
    <div>Direccion : <?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->direccion;?>
</div>
    <div>Telefono : <?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->telefono;?>
</div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success btn-small" data-toggle="modal" data-target="#myModal">
        <?php echo $_smarty_tpl->tpl_vars['practicasEmpresa']->value;?>
 candidaturas activas
    </button>

</div>

<div class="col-md-3">
    <div><h1>Media : <?php echo smarty_function_math(array('equation'=>"(y * 2)/ x ",'x'=>$_smarty_tpl->tpl_vars['empresaPorId']->value->votos,'y'=>$_smarty_tpl->tpl_vars['empresaPorId']->value->puntos,'format'=>"%.2f"),$_smarty_tpl);?>
</h1></div>
    <div>Votos : <?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->votos;?>
</div>
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['boton']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
<!---MODAL DE VALORACIONES--->



<!--- FIN MODAL DE VALORACIONES--->

<div class="col-md-1">



</div>


<div class="container-fluid">
    <?php $_smarty_tpl->tpl_vars['turns'] = new Smarty_Variable(0, null, 0);?>
    <?php
$_from = $_smarty_tpl->tpl_vars['valoraciones']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
    <div class="container">
<div class="col-lg-12">
        <div class="col-md-2" style="
    padding-top: 10px;
">
            <ul style="list-style-type:none" >
                <li><?php echo $_smarty_tpl->tpl_vars['v']->value->login;?>
</li>
                <li><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value->fecha,10,'');?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['v']->value->ciudad;?>
</li>
            </ul>
        </div>
        <div class="col-md-10">
            <h4>
               "<?php echo $_smarty_tpl->tpl_vars['v']->value->titulo;?>
"
            </h4>
            <p>
                <?php echo $_smarty_tpl->tpl_vars['v']->value->comentario;?>

            </p>
            <div class="row">
                <div class="col-md-9">
                    <a  class="openModal"  onclick="mostrarPosicion(<?php echo $_smarty_tpl->tpl_vars['turns']->value;?>
)" class="btn" data-id="<?php echo $_smarty_tpl->tpl_vars['turns']->value;?>
" data-toggle="modal" data-target="#myModal_<?php echo $_smarty_tpl->tpl_vars['turns']->value;?>
" >Ver detalles</a>
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

        <div id="myModal_<?php echo $_smarty_tpl->tpl_vars['turns']->value;?>
" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <?php $_smarty_tpl->tpl_vars['valoracion'] = new Smarty_Variable('aux', null, 0);?>
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                    <ul>
                        <li>Relacion estudio/practicas: <?php echo $_smarty_tpl->tpl_vars['v']->value->pregunta1;?>
</li>
                        <li>Nivel de satisfacion: <?php echo $_smarty_tpl->tpl_vars['v']->value->pregunta2;?>
</li>
                        <li>Formacion recibida: <?php echo $_smarty_tpl->tpl_vars['v']->value->pregunta3;?>
</li>
                        <li>Ambiente del departamento: <?php echo $_smarty_tpl->tpl_vars['v']->value->pregunta4;?>
</li>
                        <li>Remuneracion: <?php echo $_smarty_tpl->tpl_vars['v']->value->pregunta5;?>
</li>
                        <li>Horario: <?php echo $_smarty_tpl->tpl_vars['v']->value->pregunta6;?>
</li>
                        <li>Posibilidad de contrato: <?php echo $_smarty_tpl->tpl_vars['v']->value->pregunta7;?>
</li>
                        <li>Valoracion general: <?php echo $_smarty_tpl->tpl_vars['v']->value->pregunta8;?>
</li>
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
        <?php $_smarty_tpl->tpl_vars['turns'] = new Smarty_Variable($_smarty_tpl->tpl_vars['turns']->value+1, null, 0);?>
    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div id="responsive" class="modal fade" tabindex="-1" data-width="760"  style="display: none; height:480px;width: 760px; left: 40%">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <h4 class="modal-title">Responsive</h4>
    </div>
    <form action="../controller/enviarValoracion.php" method="POST" >
    <div class="modal-body">
        <div class="container">
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->login;?>
" name="login"/>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->id;?>
" name="empresa_id"/>
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
                <h4 class="modal-title" id="myModalLabel">ofertas <?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->nombre;?>
</h4>
            </div>
            <div class="modal-body">
                <ul>
                    <?php
$_from = $_smarty_tpl->tpl_vars['practicas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$foreach_r_Sav = $_smarty_tpl->tpl_vars['r'];
?>
                        <li><a href="index.php?peticion=practica&recurso=<?php echo $_smarty_tpl->tpl_vars['r']->value->id_practica;?>
" ><?php echo $_smarty_tpl->tpl_vars['r']->value->titulo;?>
</a></li>
                    <?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
?>

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

<?php }
}
?>