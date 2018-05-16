<?php

class EntidadBase
{
	private $table, $db, $conectar;

	function __construct($table)
	{
		$this->table = (string) $table;
		require_once 'Conectar.php';
		$this->conectar = new Conectar();
		$this->db = $this->conectar->conexion();

	}

	public function getConectar()
	{
		return $this->conectar();
	}

	public function getDb()
	{
		return $this->db;
	}

	public function getAll()
	{
		$query = $this->db->query("SELECT * FROM this->table ORDER BY id DESC");

		while ($row = $query->fetch_object())
		{
			$resulset[]= $row;
		}
		return $resulset;
	}

	public function getById($id)
	{
		$query = $this->db->query("SELECT * FROM $this->table WHERE id= $id");
		if($row=$query->fetch_object())
		{
			$resulset=$row;
		}

		return $resulset;
	}

	public function deleteById($column, $value)
	{
		$query = $this->db->query("DELETE FROM $this->table  WHERE id=$id");
		return $query;
	}

	public function deleteBy($column, $value)
	{
		$query = $this->db->query("DELETE FROM $this->table WHERE $column=$value");
		return $query;
	}
}
?>