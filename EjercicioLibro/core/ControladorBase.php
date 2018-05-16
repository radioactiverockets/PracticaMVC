<?php
class ControladorBase
{
	function __construct()
	{
		require_once 'EntidadBase.php';
		require_once 'ModeloBase.php';

		foreach(glob('model/*.php') as $archivo){
			require_once $archivo;
		}
	}

	public function view($vista, $datos)
	{
		//se recorren los datos para poder meterlos en una sola variable 
		foreach($datos as $id_assoc => $valor)
		{
			${$id_assoc}=$valor;
		}

		//se hace un require_once de AyudaVistas para poder usar el metodo url que nos permite acceder al metodo de un controlador por medio de la url
		require_once 'core/AyudaVistas.php';
		$helper = new AyudaVistas();
		$data = 'view/'.$vistas.'View.php';
		require_once $data;
	}

	public function redirect($controlador=CONTROLADOR_DEFECTO, $accion=ACCION_DEFECTO)
	{
		header('Location index.php?controller='.$controlador.'&action='.$action);
	

	}
}
?>