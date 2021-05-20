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
        $result = $link->prepare($consulta);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
