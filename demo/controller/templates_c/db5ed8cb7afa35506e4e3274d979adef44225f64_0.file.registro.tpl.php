<?php /* Smarty version 3.1.27, created on 2016-05-18 09:35:38
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/registro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:47380561573c1b4a3de4a6_89837559%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db5ed8cb7afa35506e4e3274d979adef44225f64' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/registro.tpl',
      1 => 1463556911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47380561573c1b4a3de4a6_89837559',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_573c1b4a42a2c2_38220440',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_573c1b4a42a2c2_38220440')) {
function content_573c1b4a42a2c2_38220440 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '47380561573c1b4a3de4a6_89837559';
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
<?php echo $_smarty_tpl->getSubTemplate ("../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>

<body>
<div class="container" style="margin-top:60px" >
<div class="row">

<h1>UNETE Y VALORA TUS PRACTICAS!</h1>
<h3>Queremos que tengas un registro comodo, No queremos aburrirte con formularios pesados</h3>
<h2>Mas tarde podras rellenar toda tu informacion...</h2>
</div>       

<div class="col-sm-6 center-block" style="position:relative; left:25%; top:25%">
 <form action="procesaReg.php" method="post" name="Registra" onsubmit="return formulario(this)">
                <div class="form-group">
                 <label for="login">Login:</label>
				     <input type="text" class="form-control" name="login" placeholder="Nombre Usuario" id="login">
                   </div>
                   <h6>Esto no tiene porque ser un nombre, tus datos personales los puedes dar mas adelante.</h6>
                 <div class="form-group">
                 <label for="pwd">Contrase&ntilde;a:</label>
                 <input type="password" class="form-control" name="pass" placeholder="Contrase&ntilde;a" id="pass">
                 </div>
                  <h6>Tranquilo no te molestaremos, pero por seguridad quiza tengas que confirmar algun cambio.</h6>
                 <div class="form-group">
                 <label for="email">E-mail:</label>
                  <input type="email" class="form-control" name="email" placeholder="E-mail" id="email">
                  </div>
                  <h6>Te recomendamos usar mayusculas, minusculas, numeros y caracteres especiales como: # % @ etc..</h6>                                 
                 <button type="submit" class="btn btn-default" name="registro">Registrarse</button>
                 <button type="reset" class="btn btn-default" value="Reset">Borrar</button>
                 
</form>
</div>                       
</div>



</body>
<footer>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</footer>
</html>

<?php }
}
?>