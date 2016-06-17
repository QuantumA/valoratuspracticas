<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
require '../../libs/Smarty.class.php';
include("../daos/AdministradorMod.inc.php");
include("../daos/EmpresaMod.inc.php");
include("../daos/GerenteMod.inc.php");
include("../daos/PracticasMod.inc.php");
include("../daos/ValoracionesMod.inc.php");
include("../daos/EstudianteMod.inc.php");
include("../daos/CandidaturaMod.php");
include("../daos/Imagen.php");



$smarty = new Smarty;
$smarty->debugging = true;
$smarty->assign("rol",$_SESSION['roll']);
$mod = new EmpresaMod();
$usr = new EstudianteMod();
$val= new ValoracionesMod();
$cand = new CandidaturaMod();
$ger= new GerenteMod();
$pra=new PracticasMod();






$peticion=$_GET["peticion"];

$recurso=$_GET["recurso"];



if($_SESSION['roll']=="Estudiante" && $_SESSION['loggedin'] = true) {
	$img=new Imagen();
	$smarty->assign("rutaImagen", $img->getLocation($_SESSION["username"]));
	$smarty->assign("usuario", $usr->Obtener($_SESSION["username"]));
	if ($peticion != NULL) {
		switch ($peticion) {
			case 'resume':
				if($val->no_repetir_valoraciones($_SESSION["username"],$recurso)){
					$smarty->assign("boton","../templates/btn_valorar.tpl");
				}else $smarty->assign("boton","../templates/btn_valorar_true.tpl");
				$smarty->assign("practicas",$pra->ObtenerPorEmpresa($recurso));
				$smarty->assign("empresaPorId", $mod->Obtener($recurso));
				$smarty->assign("practicasEmpresa", $mod->contarPracticas($recurso));
				$smarty->assign("valoraciones", $val->ObtenerConUser($recurso));
				$smarty->display('../templates/empresa.tpl');
				break;
			case 'location':
				$smarty->assign("empresaPorLocalidad", $mod->ListarPorCiudad($recurso));
				$smarty->display('../templates/porLocalidad.tpl');
				break;
			case 'users_rank':
				$smarty->assign("rank", $usr->ordenar_estudiantes_puntuacion());
				$smarty->display('../templates/ranking_usuarios_puntuacion.tpl');
				break;
			case 'ranking':
				$pagina = 0;
				if (isset($_GET["pagina"])) {
					$pagina = $_GET["pagina"];
				}
				$smarty->assign("pagina", $pagina);
				$smarty->assign("empresas", $mod->Listar20($pagina * 20));
				$smarty->assign("pag", $mod->contar());
				$smarty->display('../templates/estudiante_ranking.tpl');
				break;
			case 'logout':
				session_destroy();
				$empresa = new EmpresaMod();
				$results = $empresa->dinamica("do");
				$smarty->assign("ressss",$results);
				$smarty->assign("empresas", $mod->Listar15());
				$smarty->display('../templates/index.tpl');
				break;
			case 'valoraciones':
				$smarty->assign("valoraciones", $val->listar3ultimas());
				$smarty->assign("valoracionPropia", $val->ListarPorId($_SESSION["username"]));
				$smarty->display('../templates/estudiante_valoraciones.tpl');
				break;
			case 'nueva_empresa':
				$smarty->display('../templates/nueva_empresa.tpl');
				break;
			case 'practica':
				$smarty->assign("empresaPorId", $mod->practica_empresa($recurso));
				$smarty->assign("resume_practica",$pra->Obtener($recurso));
				$smarty->display('../templates/practicas.tpl');
				break;
			default:
				$smarty->assign("cands", $cand->Contar($_SESSION["username"]));
				$smarty->assign("vals", $val->contar_valoraciones($_SESSION["username"]));
				$smarty->assign("empresas", $mod->Listar15());
				$smarty->display('../templates/estudiante.tpl');
				break;

		}
	} else {

		$smarty->assign("cands", $cand->Contar($_SESSION["username"]));
		$smarty->assign("candidaturas", $cand->ListarPorIdUsuario($_SESSION["username"]));
		$smarty->assign("vals", $val->contar_valoraciones($_SESSION["username"]));
	$smarty->assign("empresas", $mod->Listar15());
	$smarty->display('../templates/estudiante.tpl');

}

}elseif($_SESSION['roll']=="gerente" && $_SESSION['loggedin'] = true){
	$smarty->assign("gerente", $ger->Obtener($_SESSION["username"]));

	if ($peticion != NULL) {
		switch ($peticion){
			case 'logout':
				session_destroy();
				$empresa = new EmpresaMod();
				$results = $empresa->dinamica("do");
				$smarty->assign("ressss",$results);
				$smarty->assign("empresas", $mod->Listar15());
				$smarty->display('../templates/index.tpl');
				break;
			case 'ranking':
				$pagina = 0;
				if (isset($_GET["pagina"])) {
					$pagina = $_GET["pagina"];
				}
				$smarty->assign("pagina", $pagina);
				$smarty->assign("empresas", $mod->Listar20($pagina * 20));
				$smarty->assign("pag", $mod->contar());
				$smarty->display('../templates/gerente_ranking.tpl');
				break;
			case 'empresa':
				$smarty->assign("practicasEmpresa", $mod->contarPracticas($recurso));
				$smarty->assign("empresaPorId", $mod->Obtener($recurso));
				$smarty->assign("valoraciones", $val->ObtenerConUser($recurso));
				$smarty->display('../templates/empresa_gerente.tpl');
				break;
			case 'resume':
				$smarty->assign("practicas",$pra->ObtenerPorEmpresa($recurso));
				$smarty->assign("practicasEmpresa", $mod->contarPracticas($recurso));
				$smarty->assign("empresaPorId", $mod->Obtener($recurso));
				$smarty->assign("valoraciones", $val->ObtenerConUser($recurso));
				$smarty->display('../templates/empresa_gerente.tpl');
				break;
			case 'location':
				$smarty->assign("empresaPorLocalidad", $mod->ListarPorCiudad($recurso));
				$smarty->display('../templates/porLocalidad.tpl');
				break;


		}


	}
	else{
		$smarty->assign("empresaPorId", $mod->Obtener($_SESSION['empresa']));
		$smarty->assign("valoraciones", $val->ObtenerConUser($_SESSION['empresa']));
		$smarty->display('../templates/gerente_empresa.tpl');

	}




} else  {
	if ($peticion != NULL) {
		switch ($peticion) {

			case 'location':
				$smarty->assign("empresaPorLocalidad", $mod->ListarPorCiudad($recurso));
				$smarty->display('../templates/localidad.tpl');
				break;

			case "ranking":
				$pagina = 0;
				if (isset($_GET["pagina"])) {
					$pagina = $_GET["pagina"];
				}
				$smarty->assign("pagina", $pagina);
				$smarty->assign("empresas", $mod->Listar20($pagina * 20));
				$smarty->assign("pag", $mod->contar());
				$smarty->display('../templates/ranking.tpl');
				break;
			case "index":
				$smarty->assign("empresas", $mod->Listar15());
				$smarty->display('../templates/index.tpl');
				break;
			case "resume":
				$smarty->assign("practicas",$pra->ObtenerPorEmpresa($recurso));
				$smarty->assign("practicasEmpresa", $mod->contarPracticas($recurso));
				$smarty->assign("empresaPorId", $mod->Obtener($recurso));
				$smarty->assign("valoraciones", $val->ObtenerConUser($recurso));
				$smarty->display('../templates/empresa_public.tpl');
				break;

			case "nueva_empresa":

				$smarty->display('../templates/nueva_empresa_sinregistro.tpl');

				break;

			default :
				$smarty->assign("valoraciones", $val->listar3ultimas());
				$smarty->assign("empresas", $mod->Listar15());
				$smarty->display('../templates/index.tpl');
				break;


		}
	} else {
		$empresa = new EmpresaMod();
		$results = $empresa->dinamica("do");

		$smarty->assign("ressss",$results);
		$smarty->assign("empresas", $mod->Listar15());
		$smarty->display('../templates/index.tpl');


	}




}





