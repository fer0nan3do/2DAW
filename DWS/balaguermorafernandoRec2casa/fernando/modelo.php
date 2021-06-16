<?php

class Bd
{
    private $link;
    function __construct()
    {
        if (!isset($this->link)) {
            try {
                $this->link = new PDO("mysql:host=localhost;dbname=casas", "root", "");
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
class Usuario
{
    private $dni;
    private $nombre;
    private $edad;
    private $cod_pob;

    function __construct($dni, $nombre, $edad, $cod_pob)
    {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->cod_pob = $cod_pob;
    }
    function getNombres($link)
    {

       try{
            $query = "SELECT Nombre FROM usuario where cod_pob ='$this->cod_pob'";
            $resultado= $link->prepare($query);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            $dato= "Error  ".$e->getMessage()."<br>";
            return $dato;
            die();
        }
    }
}
