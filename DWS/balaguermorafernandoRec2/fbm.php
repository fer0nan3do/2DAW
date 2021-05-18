<?php

class Bd
{
    private $link;
    function __construct()
    {
        if (!isset($this->link)) {
            try {
                $this->link = new PDO("mysql:host=localhost;dbname=juegos", "root", "");
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
class Jugador
{
    private $nombre;
    function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    function insertar($link)
    {
        $consulta = "INSERT INTO jugadores VALUES (:idJugador, :Nombre, :Apellido, :Email, :Activo)";
        $result = $link->prepare($consulta);
        $nombre = $this->nombre;
        $vacio = "";
        $result->bindParam(':idJugador', $vacio);
        $result->bindParam(':Nombre', $nombre);
        $result->bindParam(':Apellido', $vacio);
        $result->bindParam(':Email', $vacio);
        $result->bindParam(':Activo', $vacio);
        $nombre = $this->nombre;
        $result->execute();
        return $result;
    }
}
