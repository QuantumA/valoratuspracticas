<?php /* Smarty version 3.1.27, created on 2016-06-15 13:50:45
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/estudiante_ranking.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22672403157614115e88a64_53824158%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1dc48efdea0c377b6785d7a1b7955080258edd0' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/estudiante_ranking.tpl',
      1 => 1465990047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22672403157614115e88a64_53824158',
  'variables' => 
  array (
    'empresas' => 0,
    'indice' => 0,
    'pagina' => 0,
    'r' => 0,
    'pag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57614115f08bc2_89767267',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57614115f08bc2_89767267')) {
function content_57614115f08bc2_89767267 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22672403157614115e88a64_53824158';
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
    <link rel="stylesheet" type="text/css" href="/demo/templates/bootstrap-3.3.6-dist/css/estilos.css" media="screen" />



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
      <th>Nombre</th>
      <th>Localidad</th>
      <th>Url</th>
      <th>Votos</th>
      <th>Puntos</th>
    </tr>
  </thead>
  <tbody><?php
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
      <th scope="row"><?php echo ($_smarty_tpl->tpl_vars['indice']->value+1)+($_smarty_tpl->tpl_vars['pagina']->value*20);?>
</th>
      <td><a href="../controller/index.php?peticion=resume&recurso=<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value->nombre;?>
</a> </td>
      <td><a href="../controller/index.php?peticion=location&recurso=<?php echo $_smarty_tpl->tpl_vars['r']->value->localidad;?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value->localidad;?>
</a></td>
      <td><a href=http://<?php echo $_smarty_tpl->tpl_vars['r']->value->url;?>
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
    <div align="center">
    <nav>
        <ul class="pagination">

            <?php if ($_smarty_tpl->tpl_vars['pagina']->value > 0) {?>
                <li>
                    <a href="index.php?peticion=ranking&pagina=0">
                        <span aria-hidden="true">First</span>
                    </a>
                </li>
                <li>
                <a href="index.php?peticion=ranking&pagina=<?php echo $_smarty_tpl->tpl_vars['pagina']->value-1;?>
" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            <li><a href="index.php?peticion=ranking&pagina=<?php echo $_smarty_tpl->tpl_vars['pagina']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</a></li>
            <?php }?>
            <li class="active"><a href="index.php?peticion=ranking&pagina=<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pagina']->value+1;?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['pagina']->value+2 < $_smarty_tpl->tpl_vars['pag']->value) {?>
            <li><a href="index.php?peticion=ranking&pagina=<?php echo $_smarty_tpl->tpl_vars['pagina']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['pagina']->value+2;?>
</a></li>

            <li>
                <a href="index.php?peticion=ranking&pagina=<?php echo $_smarty_tpl->tpl_vars['pagina']->value+1;?>
" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
                <li>
                    <a href="index.php?peticion=ranking&pagina=<?php echo $_smarty_tpl->tpl_vars['pag']->value-2;?>
">
                        <span aria-hidden="true">Last</span>
                    </a>
                </li>
            <?php }?>

        </ul>
    </nav>
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