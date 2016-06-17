<?php /* Smarty version 3.1.27, created on 2016-05-31 11:41:58
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/practicas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1574545755574d5c664649f6_87648521%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be69c007fdd89ea4fb7b2408bb078a1a83c79eda' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/practicas.tpl',
      1 => 1464687708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1574545755574d5c664649f6_87648521',
  'variables' => 
  array (
    'empresaPorId' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_574d5c664e5dd9_04373651',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_574d5c664e5dd9_04373651')) {
function content_574d5c664e5dd9_04373651 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1574545755574d5c664649f6_87648521';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../templates/bootstrap-3.3.6-dist/css/estilos.css" media="screen" />
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


<div class="container container_fater">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->nombre;?>
</h3>
                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class=" col-md-9 col-lg-6 ">
                            <table class="table table-user-information">
                                <thead>
                                <tr>
                                    <h4>Información de las prácticas</h4>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Titulo:</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->titulo;?>
</td>
                                </tr>
                                <tr>
                                    <td>Estudios</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->estudios_min;?>
</td>
                                </tr>
                                <tr>
                                    <td>Salario</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->salario;?>
</td>
                                </tr>


                                <tr>
                                    <td>Nota de corte</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->nota_minima;?>
</td>
                                </tr>
                                <tr>
                                    <td>Provincia</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->provincia;?>
</td>
                                </tr>
                                <tr>
                                    <td>Duración</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->duracion;?>
</td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                        <div class=" col-md-9 col-lg-6 ">
                            <table class="table table-user-information">
                                <thead>
                                <tr>
                                    <h4>Informacion de la empresa</h4>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Sede</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->localidad;?>
</td>
                                </tr>
                                <tr>
                                    <td>Sector</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->sector;?>
</td>
                                </tr>
                                <tr>
                                    <td>Telefono</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->telefono;?>
</td>
                                </tr>

                                <tr>
                                    <td>Objeto social</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->objeto_so;?>
</td>
                                </tr>
                                <tr>
                                    <td>Url</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->url;?>
</td>
                                </tr>


                                </tbody>
                            </table>

                        </div>


                    </div>
                    <div style="    border-top: 1px solid #DDD;">
                        Descripcion: <?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->descripcion;?>

                    </div>
                </div>
                <form action="alta_candidatura.php" method="post">
                <div class="panel-footer">
                    <input type="text" class="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->id_practica;?>
">
                    <input type="text" class="hidden" name="lo" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->login;?>
">
                    <input type="text" class="hidden" name="em" value="<?php echo $_smarty_tpl->tpl_vars['empresaPorId']->value->id;?>
">
                    <button type=submit class="btn btn-block btn-primary">Apuntarse</button>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</html>
<?php }
}
?>