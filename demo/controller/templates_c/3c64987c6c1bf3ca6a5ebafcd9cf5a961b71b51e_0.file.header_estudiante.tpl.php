<?php /* Smarty version 3.1.27, created on 2016-06-17 10:51:32
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/header_estudiante.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16729953115763ba147cdba9_76444235%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c64987c6c1bf3ca6a5ebafcd9cf5a961b71b51e' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/header_estudiante.tpl',
      1 => 1466153478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16729953115763ba147cdba9_76444235',
  'variables' => 
  array (
    'rutaImagen' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5763ba14851ae6_97667586',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5763ba14851ae6_97667586')) {
function content_5763ba14851ae6_97667586 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16729953115763ba147cdba9_76444235';
?>
<body>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <form class="navbar-brand navbar-form navbar-left" role="search">
            <div class="form-group has-feedback">
                <input id="busqueda" name="busqueda" type="text" class="form-control" placeholder="Busca alguna empresa" onkeyup="dinamic(this.value)" autocomplete="off"/>
                <i class="glyphicon glyphicon-search form-control-feedback"></i>
                <div class="resultados " >
                    <table class="table hidden" id="resultados" name="resultados">
                    </table>
                </div>
            </div>
        </form>
    </div>
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="inicio">Inicio</a></li>
            <li><a href="ranking">Ranking</a></li>
            <li><a href="valoraciones">Valoraciones</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right"style="margin-right: 7mm">
            <img src="demo/<?php echo $_smarty_tpl->tpl_vars['rutaImagen']->value;?>
" width="45" height="45"  alt=""  class="img-circle navbar-right" style="margin-top:3px"/>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->login;?>
<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="faqs">FAQ's</a></li>
                    <li><a href="exit">salir</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });
<?php echo '</script'; ?>
>
</body>

<?php echo '<script'; ?>
 type="text/javascript">

    function dinamic(cadena) { //here cadena is your input value
        var min = 3;
        if (cadena.length >= min) { // true when the typed value have 3 or more characters
            $.ajax({
                type: 'POST',  //method to pass the information to busquedas_dinamicas.php
                url: 'busquedas',
                data: 'cadena=' + cadena, //name of the variable
                success: function (respuesta) { //if works then
                    $('#resultados').html(respuesta);
                }
            });
        }
        if (cadena.length>3) {
            document.getElementById('resultados').className = 'table';
        } else
            document.getElementById('resultados').className += ' hidden';
    }
<?php echo '</script'; ?>
>
<?php }
}
?>