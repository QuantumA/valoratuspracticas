<?php /* Smarty version 3.1.27, created on 2016-05-23 09:15:10
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/estudiante_valoraciones.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17602505742adfe941544_37300474%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da08bba0202ee74be2ad7079667adabdd0e2b99e' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/estudiante_valoraciones.tpl',
      1 => 1463987112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17602505742adfe941544_37300474',
  'variables' => 
  array (
    'valoraciones' => 0,
    'r' => 0,
    'valoracionPropia' => 0,
    'turns' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5742adfe9dc0a3_96102468',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5742adfe9dc0a3_96102468')) {
function content_5742adfe9dc0a3_96102468 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17602505742adfe941544_37300474';
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

<div class="container-fluid" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">


                <div class="tabbable" id="tabs-241263">
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="#panel-697197" data-toggle="tab">Ultimas Valoraciones</a>
                        </li>
                        <li class="active">
                            <a href="#panel-964341" data-toggle="tab">Mis valoraciones</a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane" id="panel-697197">
                            <?php
$_from = $_smarty_tpl->tpl_vars['valoraciones']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$foreach_r_Sav = $_smarty_tpl->tpl_vars['r'];
?>
                            <div class="col-lg-10">
                                <div class="col-md-2" style="padding-top: 10px;">
                                    <ul style="list-style-type:none">
                                        <li><?php echo $_smarty_tpl->tpl_vars['r']->value->login;?>
</li>
                                        <li><?php echo $_smarty_tpl->tpl_vars['r']->value->fecha;?>
</li>
                                    </ul>
                                </div>
                                <div class="col-md-10">
                                    <h4>
                                        "<?php echo $_smarty_tpl->tpl_vars['r']->value->titulo;?>
"
                                    </h4>
                                    <p>
                                        <?php echo $_smarty_tpl->tpl_vars['r']->value->comentario;?>

                                    </p>
                                    <hr style="border-top: 1px solid #C7C7C7;">
                                </div>

                            </div>
                            <?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
?>
                        </div>
                        <div class="tab-pane active" id="panel-964341">


                            <div class="panel-group" id="panel-780359">

                                <?php $_smarty_tpl->tpl_vars['turns'] = new Smarty_Variable(0, null, 0);?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['valoracionPropia']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-780359" href="#panel-element-861822_<?php echo $_smarty_tpl->tpl_vars['turns']->value;?>
"><h4><?php echo $_smarty_tpl->tpl_vars['v']->value->titulo;?>
</h4></a>
                                    </div>
                                    <div id="panel-element-861822_<?php echo $_smarty_tpl->tpl_vars['turns']->value;?>
" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                           <?php echo $_smarty_tpl->tpl_vars['v']->value->comentario;?>

                                        </div>
                                    </div>
                                </div>
                            <?php $_smarty_tpl->tpl_vars['turns'] = new Smarty_Variable($_smarty_tpl->tpl_vars['turns']->value+1, null, 0);?>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

                       </div>


                    </div>
                    </div>
                </div>

                </div>
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
<!-----
<?php $_smarty_tpl->tpl_vars['turns'] = new Smarty_Variable(0, null, 0);?>
<?php
$_from = $_smarty_tpl->tpl_vars['valoracionPropia']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$foreach_r_Sav = $_smarty_tpl->tpl_vars['r'];
?>
    <div class="panel-group" id="panel-2_<?php echo $_smarty_tpl->tpl_vars['turns']->value;?>
">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a class="panel-title" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-14422_<?php echo $_smarty_tpl->tpl_vars['turns']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value->titulo;?>
</a>
            </div>
            <div id="panel-element-14422_<?php echo $_smarty_tpl->tpl_vars['turns']->value;?>
" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php echo $_smarty_tpl->tpl_vars['r']->value->comentario;?>

                </div>
            </div>
        </div>

    </div>
    </div>
    <?php $_smarty_tpl->tpl_vars['turns'] = new Smarty_Variable($_smarty_tpl->tpl_vars['turns']->value+1, null, 0);?>
<?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
?>----->



<!---
			<div class="tabbable" id="tabs-241263">
				<ul class="nav nav-tabs">
					<li>
						<a href="#panel-697197" data-toggle="tab">Section 1</a>
					</li>
					<li class="active">
						<a href="#panel-964341" data-toggle="tab">Section 2</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane" id="panel-697197">
						<p>
							I'm in Section 1.
						</p>
					</div>
					<div class="tab-pane active" id="panel-964341">
						<p>
							Howdy, I'm in Section 2.
						</p>
					</div>
				</div>
			</div>

--><?php }
}
?>