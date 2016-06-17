<?php /* Smarty version 3.1.27, created on 2016-06-16 10:47:32
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1188832316576267a441cac3_62283455%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c634750a42a3764f348315fbb09e8f1e8723265' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/login.tpl',
      1 => 1466059656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1188832316576267a441cac3_62283455',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576267a44594c8_46959039',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576267a44594c8_46959039')) {
function content_576267a44594c8_46959039 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1188832316576267a441cac3_62283455';
?>
<!doctype html>
<html>
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
<body>

<div class="container" style="width:500px;margin-top:5%">
      <form action="logueo" class="form-signin" method="post" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputaLogin" class="sr-only">Login:</label>
        <input type="text" name="login" id="login" class="form-control" placeholder="login" required autofocus>
        <label for="inputPassword" class="sr-only">Password:</label>
        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
        <i class="glyphicon glyphicon-user form-control-feedback"></i>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div> <!-- /container -->



</body>
</html>
<?php }
}
?>