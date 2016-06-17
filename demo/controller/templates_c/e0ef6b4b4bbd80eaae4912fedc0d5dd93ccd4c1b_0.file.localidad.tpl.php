<?php /* Smarty version 3.1.27, created on 2016-06-16 12:36:07
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/localidad.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1650550250576281171375b3_29396960%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0ef6b4b4bbd80eaae4912fedc0d5dd93ccd4c1b' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/localidad.tpl',
      1 => 1466059656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1650550250576281171375b3_29396960',
  'variables' => 
  array (
    'empresaPorLocalidad' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5762811718c938_67760395',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5762811718c938_67760395')) {
function content_5762811718c938_67760395 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1650550250576281171375b3_29396960';
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
    <link rel="stylesheet" type="text/css" href="demo/templates/bootstrap-3.3.6-dist/css/estilos.css" media="screen" />
</head>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>


<body>


<div class="container">
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
            <tbody><?php
$_from = $_smarty_tpl->tpl_vars['empresaPorLocalidad']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$foreach_r_Sav = $_smarty_tpl->tpl_vars['r'];
?>
                <tr>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
</th>
                    <td><a href="resume_<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value->nombre;?>
</a> </td>
                    <td><a href="location_<?php echo $_smarty_tpl->tpl_vars['r']->value->localidad;?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value->localidad;?>
</a></td>
                    <td><a href=<?php echo $_smarty_tpl->tpl_vars['r']->value->url;?>
><?php echo $_smarty_tpl->tpl_vars['r']->value->url;?>
</a> </td>
                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value->votos;?>
</td>
                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value->puntos;?>
</td>
                </tr> <?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
?>
            </tbody>
        </table>
    </div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</html>

<?php }
}
?>