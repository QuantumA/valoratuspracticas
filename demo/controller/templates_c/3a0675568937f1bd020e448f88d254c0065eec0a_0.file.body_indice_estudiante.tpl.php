<?php /* Smarty version 3.1.27, created on 2016-06-17 10:51:32
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/body_indice_estudiante.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10220499585763ba14857409_06376383%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a0675568937f1bd020e448f88d254c0065eec0a' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/body_indice_estudiante.tpl',
      1 => 1466153478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10220499585763ba14857409_06376383',
  'variables' => 
  array (
    'rutaImagen' => 0,
    'usuario' => 0,
    'cands' => 0,
    'vals' => 0,
    'empresas' => 0,
    'indice' => 0,
    'r' => 0,
    'candidaturas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5763ba148b0952_27122018',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5763ba148b0952_27122018')) {
function content_5763ba148b0952_27122018 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/practicas/alvaro/vtp/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '10220499585763ba14857409_06376383';
?>
<hr>
<div class="container" style="margin-top: 90px">

<div class="row">
<div class="col-sm-3"><!--left col-->



    <div class="text-center">
        <img src="demo/<?php echo $_smarty_tpl->tpl_vars['rutaImagen']->value;?>
" class="img-circle " alt="avatar" width="100px" height="100px">
        <h6>Sube una foto distinta</h6>
    <form action="carga_foto" method="post" enctype="multipart/form-data">
    <input type="text" class="hidden" name="login" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->login;?>
">
        <input type="file" class="form-control" name="archivoF">
    <input type="submit">
    </form>
    </div>

    <ul class="list-group" style="margin-top: 10px">
        <li class="list-group-item text-muted">Perfil</li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Registrado</strong></span> <?php echo $_smarty_tpl->tpl_vars['usuario']->value->fecha_reg;?>
</li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Ultima visita</strong></span>Hoy</li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Login</strong></span> <?php echo $_smarty_tpl->tpl_vars['usuario']->value->login;?>
 </li>

    </ul>
    <ul class="list-group">
        <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Candidaturas</strong></span><?php echo $_smarty_tpl->tpl_vars['cands']->value;?>
</li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Valoraciones</strong></span><?php echo $_smarty_tpl->tpl_vars['vals']->value;?>
</li>
        <li class="list-group-item text-right"><span class="pull-left"><strong><a href="users_ranking">Puntos de colaboracion</a> </strong></span><?php echo $_smarty_tpl->tpl_vars['usuario']->value->pts;?>
</li>
    </ul>

    <div class="panel panel-default">
        <div class="panel-heading">Social Media</div>
        <div class="panel-body">
            <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
        </div>
    </div>

</div><!--/col-3-->
<div class="col-sm-9">

<ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
    <li><a href="#messages" data-toggle="tab">Mis candidaturas</a></li>
    <li><a href="#settings" data-toggle="tab">Settings</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane active" id="home">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Top</th>
                <th>Nombre</th>
                <th>Localidad</th>
                <th>Puntos</th>
                <th>votos </th>
            </tr>
            </thead>
            <tbody id="items">
            <?php
$_from = $_smarty_tpl->tpl_vars['empresas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['r']->_loop = false;
$_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$foreach_r_Sav = $_smarty_tpl->tpl_vars['r'];
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['indice']->value+1;?>
</td>
                <td><a href="resume_<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value->nombre;?>
</td>
                <td><a href="location_<?php echo $_smarty_tpl->tpl_vars['r']->value->localidad;?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value->localidad;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['r']->value->puntos;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['r']->value->votos;?>
</td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
?>
            </tbody>
        </table>
        <hr>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <ul class="pagination" id="myPager"></ul>
            </div>
        </div>
    </div><!--/table-resp-->

    <hr>

</div><!--/tab-pane-->
<div class="tab-pane" id="messages">

    <h2></h2>

    <ul class="list-group">
        <li class="list-group-item text-muted">Candidaturas</li>
        <?php
$_from = $_smarty_tpl->tpl_vars['candidaturas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$foreach_r_Sav = $_smarty_tpl->tpl_vars['r'];
?>
        <li class="list-group-item text-right"><a href="#" class="pull-left">candidatura</a><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['r']->value->fecha_inicio,10,'');?>
</li>
<?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
?>
    </ul>

</div><!--/tab-pane-->
<div class="tab-pane" id="settings">


    <hr>
    <form class="form" action="actualizar" method="post" id="registrationForm">
        <div class="form-group">
            <input type="text" class="hidden" name="log" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->login;?>
">


            <div class="col-xs-6">
                <label for="first_name"><h4>Nombre</h4></label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->nombre;?>
" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->nombre;?>
"title="introduce tu nombre">
            </div>
        </div>
        <div class="form-group">

            <div class="col-xs-6">
                <label for="last_name"><h4>Apellidos</h4></label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->apellidos;?>
" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->apellidos;?>
" title="introduce tus apellidos">
            </div>
        </div>

        <div class="form-group">

            <div class="col-xs-6">
                <label for="phone"><h4>Cendtro de estudios</h4></label>
                <input type="text" class="form-control" name="centro" id="centro" placeholder="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->centro;?>
" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->centro;?>
" title="introduce tu universidad o centro de estudios">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-6">
                <label for="mobile"><h4>Media</h4></label>
                <input type="text" class="form-control" name="media" id="media" placeholder="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->media;?>
" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->media;?>
" title="la media del ultimo titulo obtenido">
            </div>
        </div>
        <div class="form-group">

            <div class="col-xs-6">
                <label for="email"><h4>Email</h4></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
" title="tu correo electronico">
            </div>
        </div>
        <div class="form-group">

            <div class="col-xs-6">
                <label for="email"><h4>Pais</h4></label>
                <input type="text" class="form-control" name="pais" id="location" placeholder="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->pais;?>
" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->pais;?>
"title="pais de residencia">
            </div>
        </div>
        <div class="form-group">

            <div class="col-xs-6">
                <label for="Ciudad"><h4>Ciudad</h4></label>
                <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->ciudad;?>
" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->ciudad;?>
" title="ciudad de origen">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <br>
                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
            </div>
        </div>
    </form>
</div>

</div><!--/tab-pane-->
</div><!--/tab-content-->

</div><!--/col-9-->
</div><!--/row-->
<?php }
}
?>