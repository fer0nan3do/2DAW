<?php
class Bd
{
	private $link;
	function __construct()
	{
		if (!isset($this->link)) {
			$this->link = new PDO("mysql:host=localhost;dbname=empleos", "root", "");
			$this->link->exec("set names utf8mb4");
		}
	}

	function __get($var)
	{
		return $this->$var;
	}
}
class Empleado
{
	private $idEmpleado;
	private $nombre;
	private $foto;

	function __construct($idEmpleado, $nombre, $foto)
	{
		$this->idEmpleado = $idEmpleado;
		$this->nombre = $nombre;
		$this->foto = $foto;
	}
	public function __set($propiedad, $var){
		if(property_exists(__CLASS__, $propiedad)){
			$this->$propiedad = $var;
		}
	}
	public function __get($propiedad){
		if(property_exists(__CLASS__, $propiedad)){
			return $this->$propiedad;
		}
	}
	function buscar($link)
	{
		$query = "SELECT * FROM empleados where Nombre ='$this->nombre'";
		$resultado = $link->prepare($query);
		$resultado->execute();
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
}
