<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require '../../libs/Smarty.class.php';

$smarty = new Smarty;
$smarty->debugging = true;
$smarty->display('..//templates/login.tpl');
?>