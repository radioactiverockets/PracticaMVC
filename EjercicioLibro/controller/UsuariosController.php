<?php

class UsuariosController extends ControladorBase
{
	public function __construct()
	{
		parent::__construct();
	}

	public function indexAction()
	{
		//creamos el objeto usuarios
		$usuario = new Usuario();

		//conseguimos todos los usuarios
		$allusers=$usuario->getAll();
		
		//conseguimos la vista index y le pasamos valores
		$this->view("index",array("allusers"=>$allusers));
	}

	public function crear()
	{
		if(isset($_POST["nombre"]))
		{
			$usuario=new Usuario();
			$usuario->setNombre($_POST["nombre"]);
			$usuario->setApellido($_POST["apellido"]);
			$usuario->setEmail($_POST["email"]);
			$usuario->setPassword($_POST["password"]);
			$save=$usuario->save();
		}

		$this->redirect("Usuarios","index");
	}

	public function borrar()
	{
		if(isset($_GET["id"]))
		{
			$id=(int)$_GET["id"];
			$usuario= new Usuario();
			$usuario->deleteById($id);
		}

		$this->redirect();
	}
}
?>