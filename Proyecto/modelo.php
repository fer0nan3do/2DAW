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
class Cliente
{
	private $dniCliente;
	private $nombre;
	private $direccion;
	private $email;
	private $pwd;
	private $administrador;

	static function getAll($link)
	{
		$consulta = "SELECT * FROM clientes";
		return $result = $link->query($consulta);
	}
	function __construct($dni, $nombre, $direccion, $email, $pwd, $administrador)
	{
		$this->dniCliente = $dni;
		$this->nombre = $nombre;
		$this->direccion = $direccion;
		$this->email = $email;
		$this->pwd = $pwd;
		$this->administrador = $administrador;
	}
	function buscar($link)
	{
		$consulta = "SELECT * FROM clientes where dniCliente='$this->dniCliente'";
		$result = $link->query($consulta);
		return $result->fetch_assoc();
	}
	function autenticar($link)
	{
		$consulta = "SELECT nombre, administrador FROM clientes where dniCliente='$this->dniCliente' and pwd='$this->pwd'";
		$result = $link->query($consulta);
		return $result->fetch_assoc();
	}
	function insertar($link)
	{
		$consulta = "INSERT INTO clientes VALUES ('$this->dniCliente','$this->nombre','$this->direccion','$this->email','$this->pwd','$this->administrador')";
		return $link->query($consulta);
	}
	function modificar($link)
	{
		$consulta = "UPDATE clientes SET nombre='$this->nombre',  direccion='$this->direccion',  email='$this->email', pwd='$this->pwd', administrador='$this->administrador' WHERE dniCliente='$this->dniCliente'";
		return $link->query($consulta);
	}
	function borrar($link)
	{
		$consulta = "DELETE FROM clientes where dniCliente='$this->dniCliente'";
		return $link->query($consulta);
	}
}
class Producto
{
	private $idProducto;
	private $nombre;
	private $origen;
	private $foto;
	private $marca;
	private $categoria;
	private $peso;
	private $unidades;
	private $volumen;
	private $precio;

	static function getAllProducto($link)
	{
		$consulta = "SELECT * FROM productos";
		return $result = $link->query($consulta);
	}
	function __construct($dni, $nombre, $origen, $foto, $marca, $categoria, $peso, $unidades, $volumen, $precio)
	{
		$this->idProducto = $dni;
		$this->nombre = $nombre;
		$this->origen = $origen;
		$this->foto = $foto;
		$this->marca = $marca;
		$this->categoria = $categoria;
		$this->peso = $peso;
		$this->unidades = $unidades;
		$this->volumen = $volumen;
		$this->precio = $precio;
	}
	function buscar($link)
	{
		$consulta = "SELECT * FROM productos where idProducto='$this->idProducto'";
		$result = $link->query($consulta);
		return $result->fetch_assoc();
	}
	function insertar($link)
	{
		$consulta = "INSERT INTO productos VALUES ('$this->idProducto','$this->nombre','$this->origen','$this->foto','$this->marca','$this->categoria', '$this->peso', '$this->unidades', '$this->volumen', '$this->precio')";
		return $link->query($consulta);
	}
	function modificar($link)
	{
		$consulta = "UPDATE productos SET nombre='$this->nombre',  origen='$this->origen',  foto='$this->foto', marca='$this->marca', categoria='$this->categoria', peso='$this->peso', unidades='$this->unidades', volumen='$this->volumen', precio='$this->precio' WHERE idProducto='$this->idProducto'";
		return $link->query($consulta);
	}
	function borrar($link)
	{
		$consulta = "DELETE FROM productos where idProducto='$this->idProducto'";
		return $link->query($consulta);
	}
}
class LineaPedido
{
	private $idPedido;
	private $nLinea;
	private $idProducto;
	private $cantidad;

	static function getAllPedido($link)
	{
		$consulta = "SELECT * FROM lineaspedidos";
		return $result = $link->query($consulta);
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
}
class Pedido
{
		private $idPedido;
		private $fecha;
		private $dirEntrega;
		private $nTarjeta;
        private $fechaCaducidad;
		private $dniCliente;
		private $nlinea;
		private $idProducto;
		private $cantidad;

		function __construct($idPedido,$fecha,$dirEntrega,$nTarjeta,$fechaCaducidad,$dniCliente,$nlinea,$idProducto,$cantidad){
			$this->idPedido=$idPedido;
			$this->fecha=$fecha;
			$this->dirEntrega=$dirEntrega;
			$this->nTarjeta=$nTarjeta;
			$this->fechaCaducidad=$fechaCaducidad;
			$this->dniCliente=$dniCliente;
			$this->nlinea=$nlinea;
			$this->idProducto=$idProducto;
			$this->cantidad=$cantidad;
		}
		static function getAll($link){
			$consulta="SELECT * FROM pedidos";
			return $result=$link->query($consulta);
		}
		function insertar($link)
	{
		$consulta = "INSERT INTO pedidos VALUES ('$this->idPedido','$this->fecha','$this->dirEntrega','$this->nTarjeta', '$this->fechaCaducidad', '$this->dniCliente', '$this->nLinea', $this->idProducto', $this->cantidad')";
		return $link->query($consulta);
	}
		function borrar($link){
			$consulta= "DELETE FROM pedidos where idPedido ='$this->idPedido'";
			return $link->query($consulta);
		}
		function crear ($link){
			$consulta="INSERT INTO pedidos VALUES ('$this->idPedido','$this->fecha','','','','$this->dniCliente')";
			return $link->query($consulta);
		}
		function modificar ($link){
			$consulta="UPDATE pedidos SET fecha ='$this->fecha', dirEntrega='', nTarjeta='', fechaCaducidad='', dniCliente='$this->dniCliente' WHERE idPedido='$this->idPedido'";
			return $link->query($consulta);
		}
}
