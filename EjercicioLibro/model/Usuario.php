<?php

class Usuario extends EntidadBase
{
	private $id;
	private $nombre;
	private $apellido;
	private $email;
	private $password;

	/*dentro de este metodo constrcutor indicamos la tabla de la cual pertenece esta entidad
	recordando que la clase usuario hereda de la clase EntidadBase*/

	public function __construct()
	{
		$table="usuarios";

		parent::__construct($table);
	}

	public function getId()
	{
		return$this->id;
	}

	public function setId()
	{
		$this->id = $id;
	}

	public function getNombre()
	{
		return$this->nombre;
	}

	public function setNombre()
	{
		$this->nombre = $nombre;
	}

	public function getApellido()
	{
		return$this->apellido;
	}

	public function setApellido()
	{
		$this->apellido = $apellido;
	}

	public function getEmail()
	{
		return$this->email;
	}

	public function setEmail()
	{
		$this->email = $email;
	}

	public function getPassword()
	{
		return$this->password;
	}

	public function setPassword()
	{
		$this->password = $password;
	} 

	public function save()
	{
		$query = "INSERT INTO usuarios(id,nombre,apellido,email,password) VALUES(NULL,
		'".$this->nombre."',
		'".$this->apellido."',
		'".$this->email."',
		'".$this->password."');";

		$save=$this->getDb()->query($query);
		$this->getDb()->error;

		return $save;

	}
}
?>