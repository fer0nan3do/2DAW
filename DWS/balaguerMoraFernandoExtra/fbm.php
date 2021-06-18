<?php
class Base
{
    private $link;
    function __construct()
    {
        if (!isset($this->link)) {
            $this->link = new PDO("mysql:host=localhost;dbname=videoclub", "root", "");
            $this->link->exec("set names utf8mb4");
        }
    }
    public function __get($propiedad)
    {
        if (property_exists(__CLASS__, $propiedad)) {
            return $this->$propiedad;
        }
    }
}
class Cliente
{
    private $idCliente;
    private $nombre;
    private $apellido;
    private $email;
    private $activo;
    private $fcreacion;
    private $foto;
    function __construct($idCliente, $nombre, $apellido, $email, $activo, $fcreacion, $foto)
    {
        $this->idCliente = $idCliente;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->activo = $activo;
        $this->fcreacion = $fcreacion;
        $this->foto = $foto;
    }
    public function __set($propiedad, $var)
    {
        if (property_exists(__CLASS__, $propiedad)) {
            $this->$propiedad = $var;
        }
    }
    public function __get($propiedad)
    {
        if (property_exists(__CLASS__, $propiedad)) {
            return $this->$propiedad;
        }
    }
    function buscar($link)
    {
        $query = "SELECT * FROM clientes where IdCliente ='$this->idCliente'";
        $resultado = $link->prepare($query);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
    function modificar($link)
    {
        $consulta = "UPDATE clientes SET nombre='$this->nombre' WHERE IdCliente='$this->idCliente'";
        $result = $link->prepare($consulta);
        return $result->execute();
    }
}
