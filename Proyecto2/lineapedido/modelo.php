<?php

class Bd
{
	private $link;
	function __construct()
	{
		if (!isset($this->link)) {
			try {
				$this->link = new PDO("mysql:host=localhost;dbname=virtualmarket", "root", "");
				$this->link->exec("set names utf8mb4");
			} catch (PDOException $e) {
				$dato = "¡Error!: " . $e->getMessage() . "<br/>";
				return $dato;
				die();
			}
		}
	}

	function __get($var)
	{
		return $this->$var;
	}
}
class Cliente
{
	private $dniCliente;
	private $nombre;
	private $direccion;
	private $email;
	private $pwd;

	static function getAll($link)
	{
		try {
			$consulta = "SELECT * FROM clientes";
			$result = $link->prepare($consulta);
			$result->execute();
			return $result;
		} catch (PDOException $e) {
			$dato = "¡Error!: " . $e->getMessage() . "<br/>";
			return $dato;
			die();
		}
	}
	function __construct($dni, $nombre, $direccion, $email, $pwd)
	{
		$this->dniCliente = $dni;
		$this->nombre = $nombre;
		$this->direccion = $direccion;
		$this->email = $email;
		$this->pwd = $pwd;
	}
	function get($var)
	{
		return $this->$var;
	}
	function set($property, $value)
	{
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}
	}
	function buscar($link)
	{
		try {
			$consulta = "SELECT * FROM clientes where dniCliente='$this->dniCliente'";
			$result = $link->prepare($consulta);
			$result->execute();
			return $result->fetch(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			$dato = "¡Error!: " . $e->getMessage() . "<br/>";
			return $dato;
			die();
		}
	}
	function insertar($link)
	{
		try {
			$consulta = "INSERT INTO clientes VALUES (:dniCliente,:nombre,:direccion,:email,:pwd)";
			$result = $link->prepare($consulta);
			$result->bindParam(':dniCliente', $dniCliente);
			$result->bindParam(':nombre', $nombre);
			$result->bindParam(':direccion', $direccion);
			$result->bindParam(':email', $email);
			$result->bindParam(':pwd', $pwd);
			$dniCliente = $this->dniCliente;
			$nombre = $this->nombre;
			$direccion = $this->direccion;
			$email = $this->email;
			$pwd = $this->pwd;
			$result->execute();
			return $result;
		} catch (PDOException $e) {
			$dato = "¡Error!: " . $e->getMessage() . "<br/>";
			return $dato;
			die();
		}
	}


	/*
	function modificar($link)
	{
		try {
			$consulta = "UPDATE clientes SET nombre='$this->nombre',  direccion='$this->direccion',  email='$this->email', pwd='$this->pwd' WHERE dniCliente='$this->dniCliente'";
			$result = $link->prepare($consulta);
			return $result->execute();
		} catch (PDOException $e) {
			$dato = "¡Error!: " . $e->getMessage() . "<br/>";
			return $dato;
			die();
		}
	}
	*/

	function modificarParcial($link, $input)
	{
		try {
			$fields = getParams($input);
			$consulta = "
          		UPDATE clientes
          		SET $fields
          		WHERE dniCliente='$this->dniCliente'";
			$result = $link->prepare($consulta);

			$result->execute();
			return $result;
		} catch (PDOException $e) {
			$dato = "¡Error!: " . $e->getMessage() . "<br/>";
			return $dato;
			die();
		}
	}
	function borrar($link)
	{
		try {
			$consulta = "DELETE FROM clientes where dniCliente='$this->dniCliente'";
			$result = $link->prepare($consulta);
			return $result->execute();
		} catch (PDOException $e) {
			$dato = "¡Error!: " . $e->getMessage() . "<br/>";
			return $dato;
			die();
		}
	}
}
class LineaPedido
{
	private $idPedido;
	private $nLinea;
	private $idProducto;
	private $cantidad;

	static function getAll($link)
	{
		try {
			$consulta = "SELECT * FROM lineaspedidos";
			$result = $link->prepare($consulta);
			$result->execute();
			return $result;
		} catch (PDOException $e) {
			$dato = "¡Error!: " . $e->getMessage() . "<br/>";
			return $dato;
			die();
		}
	}
	function __construct($dni, $nLinea, $idProducto, $cantidad)
	{
		$this->idPedido = $dni;
		$this->nLinea = $nLinea;
		$this->idProducto = $idProducto;
		$this->cantidad = $cantidad;
	}
	function buscar($link)
	{
		$consulta = "SELECT * FROM lineaspedidos where idPedido='$this->idPedido'";
		$result = $link->query($consulta);
		return $result->fetch_assoc();
	}
	function insertar($link)
	{
		$consulta = "INSERT INTO lineaspedidos VALUES ('$this->idPedido','$this->nLinea','$this->idProducto','$this->cantidad')";
		return $link->query($consulta);
	}
	function modificar($link)
	{
		$consulta = "UPDATE lineaspedidos SET nLinea='$this->nLinea',  idProducto='$this->idProducto',  cantidad='$this->cantidad' WHERE idPedido='$this->idPedido'";
		return $link->query($consulta);
	}
	function borrar($link)
	{
		$consulta = "DELETE FROM lineaspedidos where idPedido='$this->idPedido'";
		return $link->query($consulta);
	}
	function modificarParcial($link, $input)
	{
		try {
			$fields = getParams($input);
			$consulta = "
          		UPDATE lineaspedidos
          		SET $fields
          		WHERE idPedido='$this->idPedido'";
			$result = $link->prepare($consulta);

			$result->execute();
			return $result;
		} catch (PDOException $e) {
			$dato = "¡Error!: " . $e->getMessage() . "<br/>";
			return $dato;
			die();
		}
	}
}
