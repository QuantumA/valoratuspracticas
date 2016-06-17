<?php /* Smarty version 3.1.27, created on 2016-05-23 13:28:26
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/nueva_empresa.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20883594855742e95abfdb56_81459915%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '051a0eb5b0eb0152ee31bb2766c69b76b31e041c' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/nueva_empresa.tpl',
      1 => 1464002267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20883594855742e95abfdb56_81459915',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5742e95addcc43_62024124',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5742e95addcc43_62024124')) {
function content_5742e95addcc43_62024124 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20883594855742e95abfdb56_81459915';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/header_estudiante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron well" style="margin-top: 90px">
                <p>
                    Si no has encontrado la empresa en nuestra base de datos te damos la posibilidad de introducirla manualmente y de esta manera colaborar con esta iniciativa, pues tambien queremos que este proyecto sea la suma de todos vosotros.
                    Al momento de introducir la empresa podras valorarla, es decir no sera necesaria una supervision previa por nuestra parte, sin embargo revisaremos posteriormente todas las inserciones.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">

            <form class="form-horizontal nueva_empresa" action="nueva_empresa.php" method="post">
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->login;?>
" name="log">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Formulario de insercion</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Nombre">Nombre</label>
                        <div class="col-md-4">
                            <input id="nombre" name="nombre" type="text" placeholder="Nombre de la empresa" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="localidad">Localidad</label>
                        <div class="col-md-4">
                            <input id="localidad" name="localidad" type="text" placeholder="Localidad" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="sector">Sector</label>
                        <div class="col-md-4">
                            <input id="sector" name="sector" type="text" placeholder="Sector" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="direccion">Direccion</label>
                        <div class="col-md-4">
                            <input id="direccion" name="direccion" type="text" placeholder="Direccion" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="telefono">Telefono</label>
                        <div class="col-md-4">
                            <input id="telefono" name="telefono" type="text" placeholder="Telefono" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="objeto">Descripcion</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="objeto" name="objeto"></textarea>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="url">url</label>
                        <div class="col-md-4">
                            <input id="url" name="url" type="text" placeholder="url de la web " class="form-control input-md">

                        </div>
                    </div>

                </fieldset>
              <div class="col-lg-5"></div>  <button class="btn btn-primary" type="submit">Introducir</button>
            </form>

        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>

</body>
</html>
<?php }
}
?>