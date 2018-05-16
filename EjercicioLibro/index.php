<?php 
	//configuracion global
require_once 'config/global.php';

//base para los controladores
require_once 'core/ControladorBase.php';

//funciones para el controlador frontal
require_once 'core/ControladorFrontal.func.php';

//se cargan los controladore y acciones
if(isset($_GET["CONTROLLER"]))
{
	lanzarAccion($controllerObj);
}else{
	$controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
	lanzarAccion($controllerObj);
}
?>