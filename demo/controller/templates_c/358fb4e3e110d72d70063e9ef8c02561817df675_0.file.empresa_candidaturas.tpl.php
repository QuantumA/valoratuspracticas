<?php /* Smarty version 3.1.27, created on 2016-05-25 16:49:58
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/empresa_candidaturas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15433855675745bb966bd3b7_50704518%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '358fb4e3e110d72d70063e9ef8c02561817df675' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/empresa_candidaturas.tpl',
      1 => 1464187743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15433855675745bb966bd3b7_50704518',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5745bb966f16f0_46108502',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5745bb966f16f0_46108502')) {
function content_5745bb966f16f0_46108502 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15433855675745bb966bd3b7_50704518';
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
<?php echo $_smarty_tpl->getSubTemplate ("../templates/header_empresa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>

<body>

</body>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</html>
<?php }
}
?>