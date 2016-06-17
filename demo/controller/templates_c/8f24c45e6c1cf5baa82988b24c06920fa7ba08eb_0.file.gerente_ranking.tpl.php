<?php /* Smarty version 3.1.27, created on 2016-06-16 13:47:05
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/gerente_ranking.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:756142459576291b93725d4_42499922%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f24c45e6c1cf5baa82988b24c06920fa7ba08eb' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/gerente_ranking.tpl',
      1 => 1466059656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '756142459576291b93725d4_42499922',
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
  'unifunc' => 'content_576291b93f7830_45811608',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576291b93f7830_45811608')) {
function content_576291b93f7830_45811608 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '756142459576291b93725d4_42499922';
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
    <link rel="stylesheet" type="text/css" href="demo/templates/bootstrap-3.3.6-dist/css/estilos.css" media="screen" />



</head>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/header_empresa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
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
        <div align="center">
            <nav>
                <ul class="pagination">

                    <?php if ($_smarty_tpl->tpl_vars['pagina']->value > 0) {?>
                        <li>
                            <a href="ranking-0">
                                <span aria-hidden="true">First</span>
                            </a>
                        </li>
                        <li>
                            <a href="ranking-<?php echo $_smarty_tpl->tpl_vars['pagina']->value-1;?>
" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        <li><a href="ranking-<?php echo $_smarty_tpl->tpl_vars['pagina']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</a></li>
                    <?php }?>
                    <li class="active"><a href="ranking-<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pagina']->value+1;?>
</a></li>
                    <?php if ($_smarty_tpl->tpl_vars['pagina']->value+2 < $_smarty_tpl->tpl_vars['pag']->value) {?>
                        <li><a href="ranking-<?php echo $_smarty_tpl->tpl_vars['pagina']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['pagina']->value+2;?>
</a></li>

                        <li>
                            <a href="ranking-<?php echo $_smarty_tpl->tpl_vars['pagina']->value+1;?>
" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="ranking-<?php echo $_smarty_tpl->tpl_vars['pag']->value-2;?>
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