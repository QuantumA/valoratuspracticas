<?php /* Smarty version 3.1.27, created on 2016-06-06 12:08:59
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/ranking_usuarios_puntuacion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:181837107757554bbb1361c1_38798285%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8a22af6a52e82963920b45bde002a01847f1b81' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/ranking_usuarios_puntuacion.tpl',
      1 => 1465207738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181837107757554bbb1361c1_38798285',
  'variables' => 
  array (
    'rank' => 0,
    'indice' => 0,
    'pagina' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57554bbb1b9e46_28574841',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57554bbb1b9e46_28574841')) {
function content_57554bbb1b9e46_28574841 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '181837107757554bbb1361c1_38798285';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.12.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="../templates/bootstrap-3.3.6-dist/css/estilos.css" media="screen" />



</head>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/header_estudiante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>


<body>


<div class="container">
    <div class="jumbotron">
        <table class="table table-responsive" id="example">
            <thead class="thead-inverse">
            <tr>
                <th>Top</th>
                <th align="center">Nombre</th>
                <th align="center">Localidad</th>
                <th align="center">Puntos</th>
            </tr>
            </thead>
            <tbody><?php
$_from = $_smarty_tpl->tpl_vars['rank']->value;
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
                    <th scope="row"><?php echo ($_smarty_tpl->tpl_vars['indice']->value+1)+($_smarty_tpl->tpl_vars['pagina']->value*20);?>
</th>
                    <td ><?php echo $_smarty_tpl->tpl_vars['r']->value->login;?>
</td>
                    <td ><?php echo $_smarty_tpl->tpl_vars['r']->value->ciudad;?>
</td>
                    <td ><?php echo $_smarty_tpl->tpl_vars['r']->value->pts;?>
</td>
                </tr> <?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
?>
            </tbody>
        </table>

</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</html>

<?php }
}
?>