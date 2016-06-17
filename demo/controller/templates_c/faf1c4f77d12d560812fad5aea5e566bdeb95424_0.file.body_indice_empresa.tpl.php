<?php /* Smarty version 3.1.27, created on 2016-06-16 12:44:03
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/body_indice_empresa.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:165401768576282f37506b4_62198318%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faf1c4f77d12d560812fad5aea5e566bdeb95424' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/body_indice_empresa.tpl',
      1 => 1466059656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165401768576282f37506b4_62198318',
  'variables' => 
  array (
    'gerente' => 0,
    'valoraciones' => 0,
    'r' => 0,
    'empresaPorId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576282f3774530_32490615',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576282f3774530_32490615')) {
function content_576282f3774530_32490615 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '165401768576282f37506b4_62198318';
?>
<hr>
<div class="container" style="margin-top: 90px">

    <div class="row">
        <div class="col-sm-3"><!--left col-->



            <div class="text-center">
                <img src="demo/res/drawables/defaultProfile.png" class="img-circle " alt="avatar" width="100px" height="100px">
                <h6>Sube una foto distinta</h6>

                <input type="file" class="form-control">
            </div>

            <ul class="list-group" style="margin-top: 10px">
                <li class="list-group-item text-muted">Perfil</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Registrado</strong></span> <?php echo $_smarty_tpl->tpl_vars['gerente']->value->fecha_reg;?>
</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Ultima visita</strong></span>Hoy</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Login</strong></span> <?php echo $_smarty_tpl->tpl_vars['gerente']->value->login;?>
 </li>

            </ul>
            <ul class="list-group">
                <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Candidaturas</strong></span>0</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span>0</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Valoraciones</strong></span>0</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Puntos de colaboracion</strong></span>0</li>
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
                <li><a href="#cands" data-toggle="tab">Crear practicas</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <?php
$_from = $_smarty_tpl->tpl_vars['valoraciones']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$foreach_r_Sav = $_smarty_tpl->tpl_vars['r'];
?>
                        <div class="col-lg-10">
                            <div class="col-md-2" style="padding-top: 10px;">
                                <ul style="list-style-type:none">
                                    <li><?php echo $_smarty_tpl->tpl_vars['r']->value->login;?>
</li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <h4>
                                    "<?php echo $_smarty_tpl->tpl_vars['r']->value->titulo;?>
"
                                </h4>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['r']->value->comentario;?>

                                </p>
                                <hr style="border-top: 1px solid #C7C7C7;">
                            </div>

                        </div>
                    <?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
?>


                </div><!--/tab-pane-->
                <div class="tab-pane" id="cands">
                    <form class="form-horizontal" action="alta_practicas" method="post">
                        <fieldset>
                            <input type="text" name="id" class="hidden" value="<?php echo $_smarty_tpl->tpl_vars['gerente']->value->id_empresa;?>
">

                            <!-- Form Name -->
                            <legend>Crear nuevas practicas para <?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->nombre;?>
</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput"> </label>
                                <div class="col-md-4">
                                    <input id="textinput" name="titulo" type="text" placeholder="Nombre oferta" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput"> </label>
                                <div class="col-md-4">
                                    <input id="textinput" name="estudios" type="text" placeholder="Estudios minimos" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput"></label>
                                <div class="col-md-4">
                                    <input id="textinput" name="salario" type="text" placeholder="Salario aproximado" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput"></label>
                                <div class="col-md-4">
                                    <input id="textinput" name="nota" type="text" placeholder="Nota de corte" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput"></label>
                                <div class="col-md-4">
                                    <input id="textinput" name="provincia" type="text" placeholder="Provincia" class="form-control input-md">

                                </div>
                            </div> <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput"></label>
                                <div class="col-md-4">
                                    <input id="textinput" name="duracion" type="text" placeholder="Duracion" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                        <label for="comment"></label>
                                        <textarea class="form-control" name="coment" rows="6" id="comment" placeholder="Descripcion de las practicas"></textarea>
                                    </div>
                        </fieldset>


                        <label class="col-md-4 control-label" ></label>
                        <button type="submit" class="btn btn-primary" name="registro">Registrar</button>
                        <label class="col-md-1 control-label" ></label>
                        <button type="reset" class="btn btn-danger" value="Reset">Borrar</button>

                    </form>
                    <div>

                </div>


                </div><!--/tab-pane-->
                <div class="tab-pane" id="settings">



                </div>

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->
<?php }
}
?>