<?php /* Smarty version 3.1.27, created on 2016-06-16 13:37:26
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:138471528257628f76211e79_66015056%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce5ff64a2f6a12584357a103fde34efece17f151' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/header.tpl',
      1 => 1466074566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138471528257628f76211e79_66015056',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57628f76218cf6_22303835',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57628f76218cf6_22303835')) {
function content_57628f76218cf6_22303835 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '138471528257628f76211e79_66015056';
?>
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
            <li><a href="#about">Empresas</a></li>
            <li><a href="#contact">Colabora</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right"style="margin-right: 7mm">
            <li><a href="login.php">Login</a></li>
            <li><a href="set_up.php">Set up</a></li>
        </ul>
    </div>
</nav>


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