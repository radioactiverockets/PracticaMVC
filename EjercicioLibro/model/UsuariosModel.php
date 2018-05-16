<?php
class UsuariosModel extends ModeloBase
{
	private $table;

	public function __construct()
	{
		$this->table="usuarios";
		parent::__construct($this->table);

	}

	//metodo consulta

	public function getUnUsuario()
	{
		$query="SELECT * FROM usuarios WHERE email='mtrbattle@hotmail.com";
		$usuario=$this->ejecutarSQL($query);

		return $usuario;
	}
}
?>