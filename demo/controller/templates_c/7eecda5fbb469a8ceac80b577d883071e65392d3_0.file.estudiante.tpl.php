<?php /* Smarty version 3.1.27, created on 2016-06-17 11:09:30
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/estudiante.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13428169105763be4ae69605_03073475%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eecda5fbb469a8ceac80b577d883071e65392d3' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/estudiante.tpl',
      1 => 1466154565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13428169105763be4ae69605_03073475',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5763be4aec7b87_41737738',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5763be4aec7b87_41737738')) {
function content_5763be4aec7b87_41737738 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13428169105763be4ae69605_03073475';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="demo/templates/bootstrap-3.3.6-dist/css/estilos.css" media="screen" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
  </head>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/header_estudiante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/body_indice_estudiante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</html>
<?php }
}
?>