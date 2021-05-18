<?php
class Bd
{
    private $link;
    function __construct()
    {
        if (!isset($this->link)) {
            $this->link = new PDO("mysql:host=localhost;dbname=virtualmarket", "root", "");
            $this->link->exec("set names utf8mb4");
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
    function insertar($link)
    {
        $consulta = "INSERT INTO clientes VALUES (:dniCliente,:nombre,:direccion,:email,:pwd, :administrador)";
        $result = $link->prepare($consulta);
        $dni = $this->dniCliente;
        $nombre = $this->nombre;
        $direccion = $this->direccion;
        $email = $this->email;
        $pwd = $this->pwd;
        $administrador = $this->administrador;
        $result->bindParam(':dniCliente', $dni);
        $result->bindParam(':nombre', $nombre);
        $result->bindParam(':direccion', $direccion);
        $result->bindParam(':email', $email);
        $result->bindParam(':pwd', $pwd);
        $result->bindParam(':administrador', $administrador);
        $result->execute();
        return $result;
    }
    function modificar($link)
    {
        $consulta = "UPDATE clientes SET nombre='$this->nombre',  direccion='$this->direccion',  email='$this->email', pwd='$this->pwd', administrador ='$this->administrador' WHERE dniCliente='$this->dniCliente'";
        return $link->query($consulta);
    }
    function borrar($link)
    {
        $consulta = "DELETE FROM clientes where dniCliente='$this->dniCliente'";
        return $link->query($consulta);
    }
}
