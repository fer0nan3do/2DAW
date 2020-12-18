<?php
class Bd
{
	private $link;
	function __construct()
	{
		if (!isset($this->link)) {
			$this->link = new mysqli('localhost', 'root', '', 'virtualmarket');
			if ($this->link->connect_errno) {
				$dato = "Fallo al conectar a MySQL: " . $link->connect_error;
				require "vista/mostrar.php";
			} else $this->link->set_charset('utf-8');
		}
	}
	function __get($var)
	{
		return $this->$var;
	}
}
class Conexion
{
	private $conexion;

	static function getAll($link)
	{
		$consulta = "SELECT * FROM clientes";
		return $result = $link->query($consulta);
	}
	function __construct($conexion)
	{
		$this->conexion = $conexion;
	}
}
class Alquileres
{
	private $idAlquiler;
	private $pelicula;
	private $cliente;
	private $empleado;

	function __construct($idAlquiler, $pelicula, $cliente, $empleado)
	{
		$this->idAlquiler = $idAlquiler;
		$this->pelicula = $pelicula;
		$this->cliete = $cliente;
		$this->empleado = $empleado;
	}
	function getIdAlquiler()
	{
		return $this->idAlquiler;
	}
	function setIdAlquiler($idAlquiler)
	{
		$this->idAlquiler = $idAlquiler;
	}
	function getPelicula()
	{
		return $this->pelicula;
	}
	function setPelicula($pelicula)
	{
		$this->pelicula = $pelicula;
	}
	function getCliente()
	{
		return $this->cliente;
	}
	function setCliente($cliente)
	{
		$this->cliente = $cliente;
	}
	function getEmpleado()
	{
		return $this->empleado;
	}
	function setEmpleado($empleado)
	{
		$this->empleado = $empleado;
	}
	function existe()
	{
	}
	function instertar()
	{
		$consulta = "INSERT INTO alquileres VALUES ('$this->idAlquiler', CURDATE(), '$this->pelicula','$this->cliente','$this->empleado')";
		return $link->query($consulta);
	}
}
