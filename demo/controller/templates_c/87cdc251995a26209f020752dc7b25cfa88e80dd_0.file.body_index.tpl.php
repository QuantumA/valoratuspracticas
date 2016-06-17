<?php /* Smarty version 3.1.27, created on 2016-05-12 11:55:12
         compiled from "/var/www/practicas/alvaro/vtp/demo/templates/body_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:208603159157345300221ff7_44345942%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87cdc251995a26209f020752dc7b25cfa88e80dd' => 
    array (
      0 => '/var/www/practicas/alvaro/vtp/demo/templates/body_index.tpl',
      1 => 1463046908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208603159157345300221ff7_44345942',
  'variables' => 
  array (
    'valoraciones' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_573453002f39e0_33928615',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_573453002f39e0_33928615')) {
function content_573453002f39e0_33928615 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '208603159157345300221ff7_44345942';
?>

<div class="container-fluid col-lg-12" style="margin-top:50px;">


    <div class="row img-back-index";">





    <div style="height: 100px; margin-top: 200px;" class="carousel slide" id="carousel-684336">
        <ol class="carousel-indicators">
            <li class="" data-slide-to="0" data-target="#carousel-684336">
            </li>
            <li data-slide-to="1" data-target="#carousel-684336" class="active">
            </li>
            <li class="" data-slide-to="2" data-target="#carousel-684336">
            </li>
        </ol>

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
        <div style="height: 100px;" st="" class="carousel-inner">
            <div style="height: 100px; background-color: rgba(0, 0, 0, 0.7);" class="item">

                <div style="" class="carousel-caption">

                    <p style="color: #f5f5f5">
                        "<?php echo $_smarty_tpl->tpl_vars['r']->value->comentario;?>
."
                    </p>
                </div>
            </div>


            <?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
?>


        </div> <a class="left carousel-control" href="#carousel-684336" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-684336" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>













</div>



</div>
<div style="height:500vh"> Aaaaaa</div>
</div>



<!------    <div style="height: 100px; background-color: rgba(0, 0, 0, 0.7);" class="item active">

    <div class="carousel-caption">

        <p style="color: #f5f5f5">
            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
        </p>
    </div>
</div>
<div style="height: 100px; background-color: rgba(0, 0, 0, 0.7);" class="item">

    <div class="carousel-caption">

        <p style="color: #f5f5f5">
            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
        </p>
    </div>
</div>------>
<?php }
}
?>