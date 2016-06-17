<?php /* Smarty version 3.1.27, created on 2016-05-11 15:43:06
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/estudiante_candidaturas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:205454535573336eb005f03_81618987%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfbcee42b17b95c23c09ce7e401359b9e51bed31' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/estudiante_candidaturas.tpl',
      1 => 1462974009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205454535573336eb005f03_81618987',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_573336eb130402_72186497',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_573336eb130402_72186497')) {
function content_573336eb130402_72186497 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '205454535573336eb005f03_81618987';
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
    <link rel="stylesheet" type="text/css" href="../templates/bootstrap-3.3.6-dist/css/estilos.css" media="screen" />
</head>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/header_estudiante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>


<body>


<div class="container-fluid" style="margin-top:120px">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">

            <!------NAV ----->
            <ul class="nav nav-pills">
                <li role="presentation" class="nav_candidatura" onclick="mostrar_panel1()" ;><a href="#">Mis candidaturas</a></li>
                <li role="presentation" class="nav_candidatura" onclick="mostrar_panel2()"><a href="#">Practicas</a></li>
                <li role="presentation" class="hidden nav_candidatura" onclick="mostrar_panel3()"><a href="#">Mensajes</a></li>

                <li class="dropdown pull-right">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Action</a>
                        </li>
                        <li>
                            <a href="#">Another action</a>
                        </li>
                        <li>
                            <a href="#">Something else here</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="#">Separated link</a>
                        </li>
                    </ul>
                    </li>

            </ul>
            <!------NAV ----->
            <div class="jumbotron" style="margin-top: 20px">
                <!------PANEL 1------->
                <div class="panel-group" id="panel-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-14422">Collapsible Group Item #1</a>
                        </div>
                        <div id="panel-element-14422" class="panel-collapse collapse in">
                            <div class="panel-body">
                               PANEL 1
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-984294">Collapsible Group Item #2</a>
                        </div>
                        <div id="panel-element-984294" class="panel-collapse collapse">
                            <div class="panel-body">
                                PANEL 1
                            </div>
                        </div>
                    </div>
                </div>
                <!------PANEL 1------->

                <!------PANEL 2------->
                <div class="panel-group" id="panel-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-14422">Collapsible Group Item #1</a>
                        </div>
                        <div id="panel-element-14422" class="panel-collapse collapse in">
                            <div class="panel-body">
                               PANEL 2
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-984294">Collapsible Group Item #2</a>
                        </div>
                        <div id="panel-element-984294" class="panel-collapse collapse">
                            <div class="panel-body">
                               PANEL 2
                            </div>
                        </div>
                    </div>
                </div>
                <!------PANEL 2------->

                <!------PANEL 3------->
                <div class="panel-group" id="panel-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-14422">Collapsible Group Item #1</a>
                        </div>
                        <div id="panel-element-14422" class="panel-collapse collapse in">
                            <div class="panel-body">
                                PANEL 3
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-984294">Collapsible Group Item #2</a>
                        </div>
                        <div id="panel-element-984294" class="panel-collapse collapse">
                            <div class="panel-body">
                               PANEL 3
                            </div>
                        </div>
                    </div>
                </div>
                <!------PANEL 3------->
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</html>


<?php echo '<script'; ?>
>

  function  mostrar_panel1(){

      document.getElementById('panel-2').style.display = 'none';
      document.getElementById('panel-3').style.display = 'none';
      document.getElementById('panel-1').style.display = 'block';

  }
  function  mostrar_panel2(){

      document.getElementById('panel-1').style.display = 'none';
      document.getElementById('panel-3').style.display = 'none';
      document.getElementById('panel-2').style.display = 'block';
  }
  function  mostrar_panel3(){

      document.getElementById('panel-1').style.display = 'none';
      document.getElementById('panel-2').style.display = 'none';
      document.getElementById('panel-3').style.display = 'block';
  }


<?php echo '</script'; ?>
>

<?php }
}
?>