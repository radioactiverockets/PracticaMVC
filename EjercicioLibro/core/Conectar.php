<?php

class Conectar
{
	private $driver, $host, $user, $pass, $database, $charset;
	//se crea el metodo conrtuctor de la clase
	function __construct()
	{
		//dataCon tendra un arreglo con la informacion de la conexion
		$dataCon = require_once 'config/database.php';

		$this->driver= $dataCon['driver'];
		$this->host= $dataCon['host'];
		$this->user= $dataCon['user'];
		$this->pass= $dataCon['pass'];
		$this->database= $dataCon['database'];
		$this->charset= $dataCon['charset'];
	}

	//metodo de la conexion

	public function conexion()
	{
		if($this->driver=='mysql'  || $this->driver==null)
		{
			$con = new mysqli($this->host, $this->user, $this->pass, $this->database);

			//se setea el tipo de acotejamiento

			$con->query("SET NAMES".$this->charset);
		}

		return $con;
	}
}
?>