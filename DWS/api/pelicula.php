<?php
include 'modelo.php';
class Pelicula extends DB{
    function obtenerPeliculas(){
        $query = $this->connect()->query('SELECT * FROM pelicula');
        return $query;
    }
}
?>